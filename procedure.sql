DROP PROCEDURE IF EXISTS post_relate;
DELIMITER $$
CREATE PROCEDURE post_relate (
	_post_id INT,
    _type_id INT,
    _limit	INT)
BEGIN
   	IF _post_id = 0 THEN
        SELECT  
           id,
            title,
            slug,
            excerpt,
            REGEXP_REPLACE(content, '(<[^>]+>)|([\\t\\n\\r])', '') AS "content",
            thumbnail,
            category_type_id,
            post.like,
            post.view,
            site_name,
            image_seo,
            keyword_seo,
            description_seo,
            updated_at,
            created_at
        FROM post
        WHERE category_type_id = _type_id 
        ORDER BY created_at DESC
        LIMIT _limit;
   	ELSE
        SET sql_mode = 'NO_UNSIGNED_SUBTRACTION';
    	SELECT  
            id,
            title,
            slug,
            excerpt,
            REGEXP_REPLACE(content, '(<[^>]+>)|([\\t\\n\\r])', '') AS "content",
            thumbnail,
            category_type_id,
            post.like,
            post.view,
            site_name,
            image_seo,
            keyword_seo,
            description_seo,
            updated_at,
            created_at
        FROM post
        WHERE ABS( id - _post_id ) > 0 
        ORDER BY ABS( id - _post_id) ASC, created_at DESC
        LIMIT _limit;
	END IF;
END; $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE post_relate_ignore (
	_post_id INT, 
    _type_id INT, 
    _diff  VARCHAR(255), 
    _limit integer
)
BEGIN
   	IF _post_id = 0 THEN
        SELECT  
            id,
            title,
            slug,
            excerpt,
            REGEXP_REPLACE(content, '(<[^>]+>)|([\\t\\n\\r])', '') AS "content",
            thumbnail,
            category_type_id,
            post.like,
            post.view,
            site_name,
            image_seo,
            keyword_seo,
            description_seo,
            updated_at,
            created_at
        FROM post
        WHERE category_type_id = _type_id  AND FIND_IN_SET(id, _diff) <= 0  
        ORDER BY created_at DESC
        LIMIT _limit;
   	ELSE
        SET sql_mode = 'NO_UNSIGNED_SUBTRACTION';
        SELECT  
            id,
            title,
            slug,
            excerpt,
            REGEXP_REPLACE(content, '(<[^>]+>)|([\\t\\n\\r])', '') AS "content",
            thumbnail,
            category_type_id,
            post.like,
            post.view,
            site_name,
            image_seo,
            keyword_seo,
            description_seo,
            updated_at,
            created_at
        FROM post
        WHERE ABS(id - _post_id ) > 0 AND  FIND_IN_SET(id, _diff) <= 0  
        ORDER BY ABS(id - _post_id ) ASC, created_at DESC
        LIMIT _limit;
	END IF;
END; $$
DELIMITER ;
