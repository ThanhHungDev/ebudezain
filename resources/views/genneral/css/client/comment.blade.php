<style>
    .comment.template{
        margin-top: 15px;
        padding-right: 0;
        padding: 0 15px;
        box-shadow: -30px -5px 30px -20px rgba(0,0,0,.05);
        background: #fafafc;
        display: block;
    }
    .comment.template .title {
        font-family: Poppins,sans-serif;
        font-weight: 700;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
        padding-bottom: 10px;
        color: #0440a2;
        display: block;
        padding-top: 15px;
    }
    .comment.template .reply{
        color: #0440a2;
    }



    .css-comment-editor{
        padding: 15px;
        background-color: #f6f8fa;
    }
    #wmd-button-bar-comment{
        padding: 15px 0 10px 0;
    }
    
    .css-comment-editor blockquote {
        padding: 0 1em;
        color: #6a737d;
        border-left: .25em solid #dfe2e5;
    }
    .css-comment-editor blockquote, 
    .css-comment-editor details, 
    .css-comment-editor dl, 
    .css-comment-editor ol, 
    .css-comment-editor pre{
        margin-top: 0;
        margin-bottom: 16px;
    }
    blockquote {
        margin: 0;
    }
    
    .btn-change-state{
        display: block;
        min-width: 150px;
        text-align: center;
        padding: 10px 16px;
        border: 1px solid transparent;
        cursor: pointer;
        background-color: #fff;
        border-bottom: 2px solid #a11a1a;
    }
    .comment em{
        font-style: italic;
    }
    
    .wmd-button-bar {
        width: 100%;
        background-color: Silver; 
    }
    
    .wmd-input { 
        width: 100%;
        height: 120px;
        padding: 0.375rem 0.75rem;
        background-color: #fafbfc;
        color: #495057;
        border: 1px solid #ba68c8;
        display: block;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        background-clip: padding-box;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        overflow: auto;
        resize: vertical;
    }
    
    .wmd-preview { 
        background-color: #c0e0ff; 
    }
    .wmd-button-row{
        float: right;
        padding: 20px 0 0 0;
    }
    .preview-code-html {
        border-top: 1px dashed #ba68c8;
        border-bottom: 1px dashed #ba68c8;
        margin-top: 5px;
        padding: 15px 0;
    }
    
    .wmd-spacer
    {
        width: 1px;
        height: 24px;
        margin-left: 5px;
        margin-right: 5px;
        list-style: none;
        display: block;
        float: left;
        border-right: 1px solid;
    }
    
    .wmd-button {
        width: 28px;
        height: 28px;
        padding-left: 2px;
        padding-right: 3px;
        list-style: none;
        cursor: pointer;
        display: block;
        float: left;
    }
    
    .wmd-button > span > svg{
        width: 24px;
        height: 24px;
        padding: 5px;
    }
    .wmd-button > span > svg:hover path{
        fill: #fd9200;
    }
    
    .wmd-spacer1
    {
        left: 50px;
    }
    .wmd-spacer2
    {
        left: 175px;
    }
    .wmd-spacer3
    {
        left: 300px;
    }
    .js-preview-data{
        border: 1px solid rgb(169, 169, 169);
        padding: 15px;
    }
    
    
    
    .wmd-prompt-background
    {
        position: fixed!important;
        background-color: Black;
        bottom: 0;
    }
    
    .wmd-prompt-dialog
    {
        border: 1px solid #999999;
        background-color: #F5F5F5;
        width: 400px;
        position: absolute;
        padding: 2em;
        background: #ffffff;
    }
    
    .wmd-prompt-dialog > div > p:first-child {
        font-size: 0.8em;
        font-family: arial, helvetica, sans-serif;
        font-size: 150%;
        margin: 0 0 15px;
    }
    .wmd-prompt-dialog > div > p:last-child{
        margin-bottom: 15px;
        font-size: 12px;
    }
    
    
    .wmd-prompt-dialog > form > input[type="text"] {
        border: 1px solid #999999;
        color: black;
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        background-color: transparent;
        border: none;
        line-height: 1.7rem;
        border-bottom: 1px solid #ced4da;
        border-radius: 0;
        outline: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        -webkit-transition: border-color 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;
    }
    
    .wmd-prompt-dialog > form > input[type="button"]{
        margin: .375rem;
        color: inherit;
        text-transform: uppercase;
        word-wrap: break-word;
        white-space: normal;
        cursor: pointer;
        border: 0;
        background-color: #0d47a1 !important;
        color: #fff !important;
        border-radius: 0;
        -webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
        box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
        -webkit-transition: color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;
        padding: 15px 8px;
        font-size: .81rem;
    }
    .wmd-prompt-dialog > form > input[type="button"]:last-child{
        background-color: #f7abab !important;
        color: #fff !important;
    }
    .send-comment .btn{
        margin-left: 0;
        margin-right: 0;
    }


    /* comment row */
    .wrapper-comment-row{
        width: 100%;
        position: relative;
        max-width: 700px;
        padding: 10px 0;
    }
    .wrapper-comment-row img{
        width: 25px;
        border-radius: 50%;
        height: auto;
        position: absolute;
        top: 10px;
        left: 0;
    }
    .wrapper-comment-row .data-comment{
        margin-left: 0;
    }
    .wrapper-comment-row .people-comment{
        display: block;
        color: #385898;
        line-height: 1.4;
        text-align: justify;
        font-size: 16px;
        padding-left: 40px;
    }
    .wrapper-comment-row .time-comment{
        float: right;
        color: rgb(96, 98, 102);
        line-height: 1.4;
        text-align: justify;
        font-size: 14px;
        padding: 5px 10px;
    }
    .wrapper-comment-row .content-comment{
        display: block;
        margin-top: 10px;
        padding: 10px 15px;
        background-color: #F7F7F7;
        border-radius: 4px;
    }
    .wrapper-reply-comment{
        padding-top: 15px
    }
    .wrapper-reply-comment .border-reply{
        border-top: 1px solid #e1e1e1 !important;
    }
    .wrapper-reply-comment .wrapper-comment-row{
        border-top: 1px dashed #d1d1d1;
    }
    .wrapper-comment-row .content-comment .content-comment{
        background-color: #F1F1F1;
    }
    .wrapper-comment-row .action-comment{
        line-height: 1.2;
        text-align: justify;
        font-size: 14px;
    }
    .wrapper-comment-row .action-comment a{
        color: #385898;
        display: inline-block;
        padding: 5px 10px;
    }
    .wrapper-comment-row .action-comment a:hover{
        color: rgb(96, 98, 102);
    }
    /*Medium devices (Small devices, 576px to 768px)*/
    @media screen and (max-width: 767.98px) {
        .wrapper-comment-row .action-comment a{
            padding: 5px
        }
    }
</style>