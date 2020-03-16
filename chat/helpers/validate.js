'use strict'
const SUPPORT_UTF8 = 'ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂ ưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ';
module.exports.isNumeric = /^[0-9]+$/g;
module.exports.isAlphaNumerics = /[A-Za-z ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂ ưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ0-9]+/g;
module.exports.isSlug = /^[A-Za-z-]+[0-9]*[A-Za-z-]*/;
/**
 *  return item.match(alphaNumerics);
 * pattern là chuỗi Regular Expression
    modifiers là thông số cấu hình cho chuỗi pattern và nó có các giá trị:
    i : so khớp không quan tâm đến chữ hoa chữ thường
    g : so khợp toàn bộ chuỗi cần tìm
    m : so khớp luôn cả các dữ liệu xuống dòng (multiline)
 */