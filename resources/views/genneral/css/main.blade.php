<style>
    /*
Author: TRƯƠNG THANH HÙNG
Author URI: https://www.facebook.com/HungSmurf
Version: 1.0
Description: .
*/

@charset "UTF-8";
*,
 :after,
 :before {
    box-sizing: border-box;
}

html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
font,
ins,
kbd,
q,
s,
samp,
small,
strike,
sub,
sup,
tt,
var,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td {
    border: 0;
    font-family: inherit;
    font-size: 100%;
    font-style: inherit;
    font-weight: inherit;
    margin: 0;
    outline: 0;
    padding: 0;
    vertical-align: baseline;
}

:focus {
    outline: 0 !important;
    text-decoration: none !important;
}

html,
body {
    margin: 0;
    padding: 0;
}

body {
    line-height: 1;
}

ol,
ul {
    list-style: none;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
}

caption,
th,
td {
    text-align: left;
    padding: 5px 10px;
}

img {
    border: none;
    max-width: 100%;
    height: auto;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section,
main,
time {
    display: block;
}

a {
    color: #222;
    text-decoration: none;
}

a:hover,
a:active {
    background-color: transparent;
    color: #bbb;
    text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6,
span {
    margin: 0px;
    padding: 0px;
}

.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
h1,
h2,
h3,
h4,
h5,
h6 {
    line-height: 1.3;
}

.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
}
table {
    border-collapse: collapse;
}
.table-responsive{
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
}
.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-bottom: 1px solid #dee2e6;
}
.table-hover tbody tr:hover {
    color: #212529;
    background-color: rgba(0,0,0,.075);
}
/*page
----------------------------------------------------*/

.line-height-0 {
    line-height: 0;
}

body {
    margin: 0px;
    padding: 0px;
    background-color: #fff;
    font-family: 'Roboto', sans-serif;
    font-size: 14px;
    font-weight: normal;
    color: #111;
    text-decoration: none;
    line-height: 1.7;
}

.float-left {
    float: left!important;
}

.float-right {
    float: right!important;
}

.float-none {
    float: none!important;
}

.mobile {
    display: none;
}

.small {
    display: none;
}


/* Clearfix
-----------------------------------------*/

.clear {
    zoom: 1;
}

.clear:after {
    clear: both;
    content: ".";
    display: block;
    height: 0;
    line-height: 0;
    visibility: hidden;
    overflow: hidden;
}


/**
* display
*/

.d-none {
    display: none !important;
}

.d-inline {
    display: inline !important;
}

.d-inline-block {
    display: inline-block !important;
}

.d-block {
    display: block !important;
}

.d-table {
    display: table !important;
}

.d-table-row {
    display: table-row !important;
}

.d-table-cell {
    display: table-cell !important;
}

.d-flex {
    display: -ms-flexbox !important;
    display: flex !important;
}

.d-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
}

.position-relative {
    position: relative;
}
.btn-input-append.btn{
    position: absolute;
    right: 0;
    top: 0;
    margin: 0;
    height: 38px;
    padding: 0.7rem;
    border: 1px solid #f2f2f2;
    box-shadow: none;
}


/**************************************************/

.text-xs {
    font-size: .75rem!important
}

.text-sm {
    font-size: .875rem!important
}

.text-base {
    font-size: 1rem!important
}

.text-lg {
    font-size: 1.125rem!important
}

.text-xl {
    font-size: 1.25rem!important
}

.text-2xl {
    font-size: 1.5rem!important
}

.text-3xl {
    font-size: 1.875rem!important
}

.text-4xl {
    font-size: 2.25rem!important
}

.text-5xl {
    font-size: 3rem!important
}

.text-6xl {
    font-size: 4rem!important
}

.italic {
    font-style: italic!important
}

.not-italic {
    font-style: normal!important
}

.uppercase {
    text-transform: uppercase!important
}

.lowercase {
    text-transform: lowercase!important
}

.capitalize {
    text-transform: capitalize!important
}

.normal-case {
    text-transform: none!important
}

.underline {
    text-decoration: underline!important
}

.line-through {
    text-decoration: line-through!important
}

.no-underline {
    text-decoration: none!important
}


/**************************************************/

.font-hairline {
    font-weight: 100!important
}

.font-thin {
    font-weight: 200!important
}

.font-light {
    font-weight: 300!important
}

.font-normal {
    font-weight: 400!important
}

.font-medium {
    font-weight: 500!important
}

.font-semibold {
    font-weight: 600!important
}

.font-bold {
    font-weight: 700!important
}

.font-extrabold {
    font-weight: 800!important
}

.font-black {
    font-weight: 900!important
}


/*** font awesome***********************************************/

.icon {
    display: inline-block;
    min-width: 22px;
    min-height: 22px;
}

.svg-inline--fa {
    display: inline-block;
    font-size: inherit;
    overflow: visible;
    vertical-align: -.125em;
    max-width: 32px;
    max-height: 32px;
}

.fa-2x {
    font-size: 2em;
    width: 28px;
}

.fa-border {
    border: solid 0.08em #eee;
    border-radius: .1em;
    padding: .2em .25em .15em;
}


/*** GENERAL ****************************************/


/**********************************************************/

.text-center {
    text-align: center;
}

.text-right {
    text-align: right;
}

.text-left {
    text-align: left;
}

.text-center-mobile {
    text-align: initial;
}

.text-right-mobile {
    text-align: initial;
}

.text-left-mobile {
    text-align: initial;
}

.text-center-mobile {
    text-align: initial;
}

.vertical-align-middle {
    vertical-align: middle;
}

.mg-auto {
    margin-left: auto;
    margin-right: auto
}

.w-22-pixel{
    width: 22px!important;
}

.h-22-pixel{
    height: 22px!important;
}

.w-25 {
    width: 25%!important;
}

.w-50 {
    width: 50%!important;
}

.w-55 {
    width: 55%!important;
}

.w-60 {
    width: 60%!important;
}

.w-65 {
    width: 65%!important;
}

.w-70 {
    width: 70%!important;
}

.w-75 {
    width: 75%!important;
}

.w-80 {
    width: 80%!important;
}

.w-85 {
    width: 85%!important;
}

.w-90 {
    width: 90%!important;
}

.w-95 {
    width: 95%!important;
}

.w-100 {
    width: 100%!important;
}


/**********************************************************/

.text-primary {
    color: #4285f4 !important;
}

.text-danger {
    color: #ff3547 !important;
}

.text-warning {
    color: #ffbb33 !important;
}

.text-success {
    color: #00c851 !important;
}

.text-info {
    color: #33b5e5 !important;
}

.text-default {
    color: #2bbbad !important;
}

.text-secondary {
    color: #aa66cc !important;
}

.text-dark {
    color: #212121 !important;
}

.text-light {
    color: #e0e0e0 !important;
}

.text-red {
    color: #f44336 !important;
}

.text-pink {
    color: #e91e63 !important;
}

.text-purple {
    color: #9c27b0 !important;
}

.text-deep-purple {
    color: #673ab7 !important;
}

.text-indigo {
    color: #3f51b5 !important;
}

.text-blue {
    color: #2196f3 !important;
}

.text-light-blue {
    color: #03a9f4 !important;
}

.text-cyan {
    color: #00bcd4 !important;
}

.text-teal {
    color: #009688 !important;
}

.text-green {
    color: #4caf50 !important;
}

.text-light-green {
    color: #8bc34a !important;
}

.text-lime {
    color: #cddc39 !important;
}

.text-yellow {
    color: #ffeb3b !important;
}

.text-amber {
    color: #ffc107 !important;
}

.text-orange {
    color: #ff9800 !important;
}

.text-deep-orange {
    color: #ff5722 !important;
}

.text-brown {
    color: #795548 !important;
}

.text-blue-grey {
    color: #607d8b !important;
}

.text-grey {
    color: #9e9e9e !important;
}

.text-black {
    color: #000 !important;
}

.text-white {
    color: #fff !important;
}

.bg-transparent{
    background-color: transparent !important;
}

.bg-red {
    background-color: #f44336 !important;
}

.bg-pink {
    background-color: #e91e63 !important;
}

.bg-purple {
    background-color: #9c27b0 !important;
}

.bg-deep-purple {
    background-color: #673ab7 !important;
}

.bg-indigo {
    background-color: #3f51b5 !important;
}

.bg-blue {
    background-color: #2196f3 !important;
}

.bg-light-blue {
    background-color: #03a9f4 !important;
}

.bg-cyan {
    background-color: #00bcd4 !important;
}

.bg-teal {
    background-color: #009688 !important;
}

.bg-green {
    background-color: #4caf50 !important;
}

.bg-light-green {
    background-color: #8bc34a !important;
}

.bg-lime {
    background-color: #cddc39 !important;
}

.bg-yellow {
    background-color: #ffeb3b !important;
}

.bg-amber {
    background-color: #ffc107 !important;
}

.bg-orange {
    background-color: #ff9800 !important;
}

.bg-deep-orange {
    background-color: #ff5722 !important;
}

.bg-brown {
    background-color: #795548 !important;
}

.bg-black {
    background-color: #000 !important;
}

.bg-white {
    background-color: #fff !important;
}

.bg-grey {
    background-color: #9e9e9e !important;
}

.bg-blue-grey {
    background-color: #607d8b !important;
}


/** background color**/

.bg-primary-color-dark {
    background-color: #0d47a1 !important;
}

.bg-secondary-color {
    background-color: #aa66cc !important;
}

.bg-secondary-color-dark {
    background-color: #9933cc !important;
}

.bg-default-color {
    background-color: #2bbbad !important;
}

.bg-default-color-dark {
    background-color: #00695c !important;
}

.bg-info-color {
    background-color: #33b5e5 !important;
}

.bg-info-color-dark {
    background-color: #0099cc !important;
}

.bg-success-color {
    background-color: #00c851 !important;
}

.bg-success-color-dark {
    background-color: #007e33 !important;
}

.bg-warning-color {
    background-color: #ffbb33 !important;
}

.bg-warning-color-dark {
    background-color: #ff8800 !important;
}

.bg-danger-color {
    background-color: #ff3547 !important;
}

.bg-danger-color-dark {
    background-color: #cc0000 !important;
}

.bg-elegant-color {
    background-color: #2e2e2e !important;
}

.bg-elegant-color-dark {
    background-color: #212121 !important;
}

.bg-stylish-color {
    background-color: #4b515d !important;
}

.bg-stylish-color-dark {
    background-color: #3e4551 !important;
}

.bg-unique-color {
    background-color: #3f729b !important;
}

.bg-unique-color-dark {
    background-color: #1c2331 !important;
}

.bg-special-color {
    background-color: #37474f !important;
}

.bg-special-color-dark {
    background-color: #263238 !important;
}

.bg-primary {
    background-color: #4285f4 !important;
}

.bg-danger {
    background-color: #ff3547 !important;
}

.bg-warning {
    background-color: #ffbb33 !important;
}

.bg-success {
    background-color: #00c851 !important;
}

.bg-info {
    background-color: #33b5e5 !important;
}

.bg-default {
    background-color: #2bbbad !important;
}

.bg-secondary {
    background-color: #aa66cc !important;
}

.bg-dark {
    background-color: #212121 !important;
}

.bg-light {
    background-color: #e0e0e0 !important;
}

.bg-grey-x {
    background-color: #f9f9f9 !important;
}


/********************************************************************/


/**** border */

.rounded-circle {
    border-radius: 50% !important;
}

.border {
    border: 1px solid #dee2e6!important;
}

.border-top {
    border-top: 1px solid #dee2e6!important;
}

.border-right {
    border-right: 1px solid #dee2e6!important;
}

.border-bottom {
    border-bottom: 1px solid #dee2e6!important;
}

.border-left {
    border-left: 1px solid #dee2e6!important;
}

.border-brown {
    border-color: #795548!important;
}

.border-dark {
    border-color: #212121 !important;
}

.border-primary {
    border-color: #4285f4 !important;
}

.border-danger {
    border-color: #ff3547 !important;
}

.border-warning {
    border-color: #ffbb33 !important;
}

.border-success {
    border-color: #00c851 !important;
}

.border-info {
    border-color: #33b5e5 !important;
}

.border-default {
    border-color: #2bbbad !important;
}

.border-secondary {
    border-color: #aa66cc !important;
}

.border-light {
    border-color: #e0e0e0 !important;
}

.bd-transparent{
    border-color: transparent !important;
}

.bd-red {
    border-color: #f44336 !important;
}

.bd-pink {
    border-color: #e91e63 !important;
}

.bd-purple {
    border-color: #9c27b0 !important;
}

.bd-deep-purple {
    border-color: #673ab7 !important;
}

.bd-indigo {
    border-color: #3f51b5 !important;
}

.bd-blue {
    border-color: #2196f3 !important;
}

.bd-light-blue {
    border-color: #03a9f4 !important;
}

.bd-cyan {
    border-color: #00bcd4 !important;
}

.bd-teal {
    border-color: #009688 !important;
}

.bd-green {
    border-color: #4caf50 !important;
}

.bd-light-green {
    border-color: #8bc34a !important;
}

.bd-lime {
    border-color: #cddc39 !important;
}

.bd-yellow {
    border-color: #ffeb3b !important;
}

.bd-amber {
    border-color: #ffc107 !important;
}

.bd-orange {
    border-color: #ff9800 !important;
}

.bd-deep-orange {
    border-color: #ff5722 !important;
}

.bd-brown {
    border-color: #795548 !important;
}

.bd-black {
    border-color: #000 !important;
}

.bd-white {
    border-color: #fff !important;
}

.bd-grey {
    border-color: #9e9e9e !important;
}

.bd-blue-grey {
    border-color: #607d8b !important;
}


/** background color**/

.bd-primary-color-dark {
    border-color: #0d47a1 !important;
}

.bd-secondary-color {
    border-color: #aa66cc !important;
}

.bd-secondary-color-dark {
    border-color: #9933cc !important;
}

.bd-default-color {
    border-color: #2bbbad !important;
}

.bd-default-color-dark {
    border-color: #00695c !important;
}

.bd-info-color {
    border-color: #33b5e5 !important;
}

.bd-info-color-dark {
    border-color: #0099cc !important;
}

.bd-success-color {
    border-color: #00c851 !important;
}

.bd-success-color-dark {
    border-color: #007e33 !important;
}

.bd-warning-color {
    border-color: #ffbb33 !important;
}

.bd-warning-color-dark {
    border-color: #ff8800 !important;
}

.bd-danger-color {
    border-color: #ff3547 !important;
}

.bd-danger-color-dark {
    border-color: #cc0000 !important;
}

.bd-elegant-color {
    border-color: #2e2e2e !important;
}

.bd-elegant-color-dark {
    border-color: #212121 !important;
}

.bd-stylish-color {
    border-color: #4b515d !important;
}

.bd-stylish-color-dark {
    border-color: #3e4551 !important;
}

.bd-unique-color {
    border-color: #3f729b !important;
}

.bd-unique-color-dark {
    border-color: #1c2331 !important;
}

.bd-special-color {
    border-color: #37474f !important;
}

.bd-special-color-dark {
    border-color: #263238 !important;
}

.bd-primary {
    border-color: #4285f4 !important;
}

.bd-danger {
    border-color: #ff3547 !important;
}

.bd-warning {
    border-color: #ffbb33 !important;
}

.bd-success {
    border-color: #00c851 !important;
}

.bd-info {
    border-color: #33b5e5 !important;
}

.bd-default {
    border-color: #2bbbad !important;
}

.bd-secondary {
    border-color: #aa66cc !important;
}

.bd-dark {
    border-color: #212121 !important;
}

.bd-light {
    border-color: #e0e0e0 !important;
}

.bd-grey-x {
    border-color: #f9f9f9 !important;
}

/**********************************************************/


/**********************************************************/


/**********************************************************/


/**********************************************************/


/*background gradient*/

.purple-gradient {
    background: linear-gradient(40deg, #ff6ec4, #7873f5) !important;
}

.peach-gradient {
    background: linear-gradient(40deg, #FFD86F, #FC6262) !important;
}

.aqua-gradient {
    background: linear-gradient(40deg, #2096ff, #05ffa3) !important;
}

.blue-gradient {
    background: linear-gradient(40deg, #45cafc, #303f9f) !important;
}

.purple-gradient-rgba {
    background: linear-gradient(40deg, rgba(255, 110, 196, 0.9), rgba(120, 115, 245, 0.9)) !important;
}

.peach-gradient-rgba {
    background: linear-gradient(40deg, rgba(255, 216, 111, 0.9), rgba(252, 98, 98, 0.9)) !important;
}

.aqua-gradient-rgba {
    background: linear-gradient(40deg, rgba(32, 150, 255, 0.9), rgba(5, 255, 163, 0.9)) !important;
}

.blue-gradient-rgba {
    background: linear-gradient(40deg, rgba(69, 202, 252, 0.9), rgba(48, 63, 159, 0.9)) !important;
}


/**********************************************************/


/**********************************************************/


/*background-image gradient*/

.juicy-peach-gradient {
    background-image: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%);
}

.young-passion-gradient {
    background-image: linear-gradient(to right, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%);
}

.lady-lips-gradient {
    background-image: linear-gradient(to top, #ff9a9e 0%, #fecfef 99%, #fecfef 100%);
}

.sunny-morning-gradient {
    background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
}

.rainy-ashville-gradient {
    background-image: linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%);
}

.frozen-dreams-gradient {
    background-image: linear-gradient(to top, #fdcbf1 0%, #fdcbf1 1%, #e6dee9 100%);
}

.warm-flame-gradient {
    background-image: linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%);
}

.night-fade-gradient {
    background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);
}

.spring-warmth-gradient {
    background-image: linear-gradient(to top, #fad0c4 0%, #ffd1ff 100%);
}

.winter-neva-gradient {
    background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
}

.dusty-grass-gradient {
    background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);
}

.tempting-azure-gradient {
    background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
}

.heavy-rain-gradient {
    background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);
}

.amy-crisp-gradient {
    background-image: linear-gradient(120deg, #a6c0fe 0%, #f68084 100%);
}

.mean-fruit-gradient {
    background-image: linear-gradient(120deg, #fccb90 0%, #d57eeb 100%);
}

.deep-blue-gradient {
    background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);
}

.ripe-malinka-gradient {
    background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%);
}

.cloudy-knoxville-gradient {
    background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
}

.morpheus-den-gradient {
    background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%);
}

.rare-wind-gradient {
    background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
}

.near-moon-gradient {
    background-image: linear-gradient(to top, #5ee7df 0%, #b490ca 100%);
}


/**********************************************************/


/* view mask hover-effects overlay**/

.view {
    position: relative;
    overflow: hidden;
    cursor: default;
}

.view .mask {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
    width: 100%;
    height: 100%;
    background-attachment: fixed;
}

.overlay .mask {
    opacity: 0;
    transition: all .4s ease-in-out;
}

.overlay .mask:hover {
    opacity: 0.5;
}

.zoom:hover img
/* , .zoom:hover video  */

{
    transform: scale(1.1);
}

.zoom img
/* ,.zoom video  */

{
    transition: all .2s linear;
}


/**********************************************************/


/** shadows depth ****************************************/

.shadows-0 {
    box-shadow: none !important;
}

.shadows-1 {
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12) !important;
}

.shadows-1-half {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15) !important;
}

.shadows-2 {
    box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important;
}

.shadows-3 {
    box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19) !important;
}

.shadows-4 {
    box-shadow: 0 16px 28px 0 rgba(0, 0, 0, 0.22), 0 25px 55px 0 rgba(0, 0, 0, 0.21) !important;
}

.shadows-5 {
    box-shadow: 0 27px 24px 0 rgba(0, 0, 0, 0.2), 0 40px 77px 0 rgba(0, 0, 0, 0.22) !important;
}


/**********************************************************/

.pb-1,
.py-1 {
    padding-bottom: 0.25rem!important;
}

.pt-1,
.py-1 {
    padding-top: 0.25rem!important;
}

.pb-2,
.py-2 {
    padding-bottom: 0.5rem!important;
}

.pt-2,
.py-2 {
    padding-top: 0.5rem!important;
}

.pb-3,
.py-3 {
    padding-bottom: 1rem!important;
}

.pt-3,
.py-3 {
    padding-top: 1rem!important;
}

.pb-4,
.py-4 {
    padding-bottom: 1.5rem!important;
}

.pt-4,
.py-4 {
    padding-top: 1.5rem!important;
}

.pb-5,
.py-5 {
    padding-bottom: 3rem!important;
}

.pt-5,
.py-5 {
    padding-top: 3rem!important;
}

.pl-1,
.px-1 {
    padding-left: 0.25rem!important;
}

.pr-1,
.px-1 {
    padding-right: 0.25rem!important;
}

.pl-2,
.px-2 {
    padding-left: 0.5rem!important;
}

.pr-2,
.px-2 {
    padding-right: 0.5rem!important;
}

.pl-3,
.px-3 {
    padding-left: 1rem!important;
}

.pr-3,
.px-3 {
    padding-right: 1rem!important;
}

.pl-4,
.px-4 {
    padding-left: 1.5rem!important;
}

.pr-4,
.px-4 {
    padding-right: 1.5rem!important;
}

.pl-5,
.px-5 {
    padding-left: 3rem!important;
}

.pr-5,
.px-5 {
    padding-right: 3rem!important;
}

.mb-1,
.my-1 {
    margin-bottom: 0.25rem!important;
}

.mt-1,
.my-1 {
    margin-top: 0.25rem!important;
}

.mb-2,
.my-2 {
    margin-bottom: 0.5rem!important;
}

.mt-2,
.my-2 {
    margin-top: 0.5rem!important;
}

.mb-3,
.my-3 {
    margin-bottom: 1rem!important;
}

.mt-3,
.my-3 {
    margin-top: 1rem!important;
}

.mb-4,
.my-4 {
    margin-bottom: 1.5rem!important;
}

.mt-4,
.my-4 {
    margin-top: 1.5rem!important;
}

.mb-5,
.my-5 {
    margin-bottom: 3rem!important;
}

.mt-5,
.my-5 {
    margin-top: 3rem!important;
}

.ml-1,
.mx-1 {
    margin-left: 0.25rem!important;
}

.mr-1,
.mx-1 {
    margin-right: 0.25rem!important;
}

.ml-2,
.mx-2 {
    margin-left: 0.5rem!important;
}

.mr-2,
.mx-2 {
    margin-right: 0.5rem!important;
}

.ml-3,
.mx-3 {
    margin-left: 1rem!important;
}

.mr-3,
.mx-3 {
    margin-right: 1rem!important;
}

.ml-4,
.mx-4 {
    margin-left: 1.5rem!important;
}

.mr-4,
.mx-4 {
    margin-right: 1.5rem!important;
}

.ml-5,
.mx-5 {
    margin-left: 3rem!important;
}

.mr-5,
.mx-5 {
    margin-right: 3rem!important;
}

/**********************************************************/


/**********************************************************/


/* button */

.btn {
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    padding: 0.84rem 2.14rem;
    font-size: 0.81rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    margin: 0.375rem;
    border: 0;
    border-radius: 0;
    cursor: pointer;
    text-transform: uppercase;
    white-space: normal;
    word-wrap: break-word;
    color: inherit;
}

.btn:hover,
.btn:active,
.btn:focus {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
    outline: 0;
}
.btn:disabled{
    background-color: #f2f2f2!important;
    color: #ff3547 !important;
}

/**********************************************************/

.underline {
    position: relative;
}

.underline:after {
    display: block;
    content: ' ';
    opacity: 0;
    margin: 0 15px;
    text-align: center;
    height: 1px;
    background-color: transparent;
    transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
}

.wrapper-underline:hover>.underline:after {
    opacity: 1;
    margin: 0;
    background-color: #5e0000;
}


/**********************************************************/

progress {
    box-shadow: none;
    position: relative;
    display: block;
    width: 100%;
    height: .25rem;
    overflow: hidden;
    margin-bottom: 1rem;
    background-color: #eee;
}

.progress-bar {
    box-shadow: none;
    height: .25rem;
    border-radius: 0;
    background-color: #0d47a1;
}


/**********************************************************/


/**********************************************************/


/**********************************************************/

.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

.row {
    margin-right: -15px;
    margin-left: -15px;
}

.row:after {
    clear: both;
}

.clearfix:after,
.clearfix:before,
.container:after,
.container:before,
.row:after,
.row:before {
    display: table;
    content: " ";
}

.container {
    max-width: 1320px;
}

.col-1,
.col-xs-1,
.col-sm-1,
.col-md-1,
.col-lg-1,
.col-2,
.col-xs-2,
.col-sm-2,
.col-md-2,
.col-lg-2,
.col-3,
.col-xs-3,
.col-sm-3,
.col-md-3,
.col-lg-3,
.col-4,
.col-xs-4,
.col-sm-4,
.col-md-4,
.col-lg-4,
.col-5,
.col-xs-5,
.col-sm-5,
.col-md-5,
.col-lg-5,
.col-6,
.col-xs-6,
.col-sm-6,
.col-md-6,
.col-lg-6,
.col-7,
.col-xs-7,
.col-sm-7,
.col-md-7,
.col-lg-7,
.col-8,
.col-xs-8,
.col-sm-8,
.col-md-8,
.col-lg-8,
.col-9,
.col-xs-9,
.col-sm-9,
.col-md-9,
.col-lg-9,
.col-10,
.col-xs-10,
.col-sm-10,
.col-md-10,
.col-lg-10,
.col-11,
.col-xs-11,
.col-sm-11,
.col-md-11,
.col-lg-11,
.col-12,
.col-xs-12,
.col-sm-12,
.col-md-12,
.col-lg-12 {
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

.col-1,
.col-2,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9,
.col-10,
.col-11,
.col-12 {
    float: left;
}

.col-12 {
    width: 100%;
}

.col-11 {
    width: 91.66666667%;
}

.col-10 {
    width: 83.33333333%;
}

.col-9 {
    width: 75%;
}

.col-8 {
    width: 66.66666667%;
}

.col-7 {
    width: 58.33333333%;
}

.col-6 {
    width: 50%;
}

.col-5 {
    width: 41.66666667%;
}

.col-4 {
    width: 33.33333333%;
}

.col-3 {
    width: 25%;
}

.col-2 {
    width: 16.66666667%;
}

.col-1 {
    width: 8.33333333%;
}


/**
* css begin
*/


/* Medium devices (desktops, 992px to 1199px and down) 
= @media (min-width: 992px) */

@media screen and (max-width: 1320px) {
    .col-1,
    .col-xl-2,
    .col-xl-3,
    .col-xl-4,
    .col-xl-5,
    .col-xl-6,
    .col-xl-7,
    .col-xl-8,
    .col-xl-9,
    .col-xl-10,
    .col-xl-11,
    .col-xl-12 {
        float: left;
    }
    .col-xl-12 {
        width: 100%;
    }
    .col-xl-11 {
        width: 91.66666667%;
    }
    .col-xl-10 {
        width: 83.33333333%;
    }
    .col-xl-9 {
        width: 75%;
    }
    .col-xl-8 {
        width: 66.66666667%;
    }
    .col-xl-7 {
        width: 58.33333333%;
    }
    .col-xl-6 {
        width: 50%;
    }
    .col-xl-5 {
        width: 41.66666667%;
    }
    .col-xl-4 {
        width: 33.33333333%;
    }
    .col-xl-3 {
        width: 25%;
    }
    .col-xl-2 {
        width: 16.66666667%;
    }
    .col-xl-1 {
        width: 8.33333333%;
    }
}


/* Medium devices (desktops, 992px to 1199px and down) 
= @media (min-width: 992px) */

@media screen and (max-width: 1199.98px) {
    .container {
        max-width: 960px;
    }
    .col-lg-1,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12 {
        float: left;
    }
    .col-lg-12 {
        width: 100%;
    }
    .col-lg-11 {
        width: 91.66666667%;
    }
    .col-lg-10 {
        width: 83.33333333%;
    }
    .col-lg-9 {
        width: 75%;
    }
    .col-lg-8 {
        width: 66.66666667%;
    }
    .col-lg-7 {
        width: 58.33333333%;
    }
    .col-lg-6 {
        width: 50%;
    }
    .col-lg-5 {
        width: 41.66666667%;
    }
    .col-lg-4 {
        width: 33.33333333%;
    }
    .col-lg-3 {
        width: 25%;
    }
    .col-lg-2 {
        width: 16.66666667%;
    }
    .col-lg-1 {
        width: 8.33333333%;
    }
}


/*Tablet devices (768px to 992px and down)*/

@media screen and (max-width: 991.98px) {
    .container {
        max-width: 720px;
    }
    .col-md-1,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-10,
    .col-md-11,
    .col-md-12 {
        float: left;
    }
    .col-md-12 {
        width: 100%;
    }
    .col-md-11 {
        width: 91.66666667%;
    }
    .col-md-10 {
        width: 83.33333333%;
    }
    .col-md-9 {
        width: 75%;
    }
    .col-md-8 {
        width: 66.66666667%;
    }
    .col-md-7 {
        width: 58.33333333%;
    }
    .col-md-6 {
        width: 50%;
    }
    .col-md-5 {
        width: 41.66666667%;
    }
    .col-md-4 {
        width: 33.33333333%;
    }
    .col-md-3 {
        width: 25%;
    }
    .col-md-2 {
        width: 16.66666667%;
    }
    .col-md-1 {
        width: 8.33333333%;
    }
}


/*Medium devices (Small devices, 576px to 768px)*/

@media screen and (max-width: 767.98px) {
    .mobile {
        display: block;
    }
    .pc {
        display: none;
    }
    .col-sm-1,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12 {
        float: left;
    }
    .col-sm-12 {
        width: 100%;
    }
    .col-sm-11 {
        width: 91.66666667%;
    }
    .col-sm-10 {
        width: 83.33333333%;
    }
    .col-sm-9 {
        width: 75%;
    }
    .col-sm-8 {
        width: 66.66666667%;
    }
    .col-sm-7 {
        width: 58.33333333%;
    }
    .col-sm-6 {
        width: 50%;
    }
    .col-sm-5 {
        width: 41.66666667%;
    }
    .col-sm-4 {
        width: 33.33333333%;
    }
    .col-sm-3 {
        width: 25%;
    }
    .col-sm-2 {
        width: 16.66666667%;
    }
    .col-sm-1 {
        width: 8.33333333%;
    }
    .shadows-0-mobile {
        box-shadow: none !important;
    }
    .shadows-1-mobile {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12) !important;
    }
    .shadows-1-half-mobile {
        box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15) !important;
    }
    .shadows-2-mobile {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important;
    }
    .shadows-3-mobile {
        box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19) !important;
    }
    .shadows-4-mobile {
        box-shadow: 0 16px 28px 0 rgba(0, 0, 0, 0.22), 0 25px 55px 0 rgba(0, 0, 0, 0.21) !important;
    }
    .shadows-5-mobile {
        box-shadow: 0 27px 24px 0 rgba(0, 0, 0, 0.2), 0 40px 77px 0 rgba(0, 0, 0, 0.22) !important;
    }
    /**********************************************************/
    .pb-sm-0,
    .py-sm-0 {
        padding-bottom: 0!important;
    }
    .pt-sm-0,
    .py-sm-0 {
        padding-top: 0!important;
    }
    .pb-sm-1,
    .py-sm-1 {
        padding-bottom: 0.25rem!important;
    }
    .pt-sm-1,
    .py-sm-1 {
        padding-top: 0.25rem!important;
    }
    .pb-sm-2,
    .py-sm-2 {
        padding-bottom: 0.5rem!important;
    }
    .pt-sm-2,
    .py-sm-2 {
        padding-top: 0.5rem!important;
    }
    .pb-sm-3,
    .py-sm-3 {
        padding-bottom: 1rem!important;
    }
    .pt-sm-3,
    .py-sm-3 {
        padding-top: 1rem!important;
    }
    .pb-sm-4,
    .py-sm-4 {
        padding-bottom: 1.5rem!important;
    }
    .pt-sm-4,
    .py-sm-4 {
        padding-top: 1.5rem!important;
    }
    .pb-sm-5,
    .py-sm-5 {
        padding-bottom: 3rem!important;
    }
    .pt-sm-5,
    .py-sm-5 {
        padding-top: 3rem!important;
    }
    .pl-sm-0,
    .px-sm-0 {
        padding-left: 0!important;
    }
    .pr-sm-0,
    .px-sm-0 {
        padding-right: 0!important;
    }
    .pl-sm-1,
    .px-sm-1 {
        padding-left: 0.25rem!important;
    }
    .pr-sm-1,
    .px-sm-1 {
        padding-right: 0.25rem!important;
    }
    .pl-sm-2,
    .px-sm-2 {
        padding-left: 0.5rem!important;
    }
    .pr-sm-2,
    .px-sm-2 {
        padding-right: 0.5rem!important;
    }
    .pl-sm-3,
    .px-sm-3 {
        padding-left: 1rem!important;
    }
    .pr-sm-3,
    .px-sm-3 {
        padding-right: 1rem!important;
    }
    .pl-sm-4,
    .px-sm-4 {
        padding-left: 1.5rem!important;
    }
    .pr-sm-4,
    .px-sm-4 {
        padding-right: 1.5rem!important;
    }
    .pl-sm-5,
    .px-sm-5 {
        padding-left: 3rem!important;
    }
    .pr-sm-5,
    .px-sm-5 {
        padding-right: 3rem!important;
    }
    /**********************************************************/
    .text-center-mobile {
        text-align: center;
    }
    .text-right-mobile {
        text-align: right;
    }
    .text-left-mobile {
        text-align: left;
    }
}


/* Small devices (landscape phones, 576px and up) */

@media screen and (max-width: 575.98px) {
    .col-xs-1,
    .col-xs-2,
    .col-xs-3,
    .col-xs-4,
    .col-xs-5,
    .col-xs-6,
    .col-xs-7,
    .col-xs-8,
    .col-xs-9,
    .col-xs-10,
    .col-xs-11,
    .col-xs-12 {
        float: left;
    }
    .col-xs-12 {
        width: 100%;
    }
    .col-xs-11 {
        width: 91.66666667%;
    }
    .col-xs-10 {
        width: 83.33333333%;
    }
    .col-xs-9 {
        width: 75%;
    }
    .col-xs-8 {
        width: 66.66666667%;
    }
    .col-xs-7 {
        width: 58.33333333%;
    }
    .col-xs-6 {
        width: 50%;
    }
    .col-xs-5 {
        width: 41.66666667%;
    }
    .col-xs-4 {
        width: 33.33333333%;
    }
    .col-xs-3 {
        width: 25%;
    }
    .col-xs-2 {
        width: 16.66666667%;
    }
    .col-xs-1 {
        width: 8.33333333%;
    }
    /**********************************************************/
    .pb-xs-0,
    .py-xs-0 {
        padding-bottom: 0!important;
    }
    .pt-xs-0,
    .py-xs-0 {
        padding-top: 0!important;
    }
    .pb-xs-1,
    .py-xs-1 {
        padding-bottom: 0.25rem!important;
    }
    .pt-xs-1,
    .py-xs-1 {
        padding-top: 0.25rem!important;
    }
    .pb-xs-2,
    .py-xs-2 {
        padding-bottom: 0.5rem!important;
    }
    .pt-xs-2,
    .py-xs-2 {
        padding-top: 0.5rem!important;
    }
    .pb-xs-3,
    .py-xs-3 {
        padding-bottom: 1rem!important;
    }
    .pt-xs-3,
    .py-xs-3 {
        padding-top: 1rem!important;
    }
    .pb-xs-4,
    .py-xs-4 {
        padding-bottom: 1.5rem!important;
    }
    .pt-xs-4,
    .py-xs-4 {
        padding-top: 1.5rem!important;
    }
    .pb-xs-5,
    .py-xs-5 {
        padding-bottom: 3rem!important;
    }
    .pt-xs-5,
    .py-xs-5 {
        padding-top: 3rem!important;
    }
    .pl-xs-0,
    .px-xs-0 {
        padding-left: 0!important;
    }
    .pr-xs-0,
    .px-xs-0 {
        padding-right: 0!important;
    }
    .pl-xs-1,
    .px-xs-1 {
        padding-left: 0.25rem!important;
    }
    .pr-xs-1,
    .px-xs-1 {
        padding-right: 0.25rem!important;
    }
    .pl-xs-2,
    .px-xs-2 {
        padding-left: 0.5rem!important;
    }
    .pr-xs-2,
    .px-xs-2 {
        padding-right: 0.5rem!important;
    }
    .pl-xs-3,
    .px-xs-3 {
        padding-left: 1rem!important;
    }
    .pr-xs-3,
    .px-xs-3 {
        padding-right: 1rem!important;
    }
    .pl-xs-4,
    .px-xs-4 {
        padding-left: 1.5rem!important;
    }
    .pr-xs-4,
    .px-xs-4 {
        padding-right: 1.5rem!important;
    }
    .pl-xs-5,
    .px-xs-5 {
        padding-left: 3rem!important;
    }
    .pr-xs-5,
    .px-xs-5 {
        padding-right: 3rem!important;
    }
    /**********************************************************/
    .small {
        display: block;
    }
}
</style>