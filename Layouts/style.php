<style>
    /* reset */
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/* start editing from here */
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
.underline{	padding-bottom:5px;	border-bottom: 1px solid #eee; margin:0 0 20px 0;}/* Add 5px bottom padding and a underline */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}

ul{
	list-style: none;
	padding-left:0px;
}
/*end reset*/
body{
	background:#F9F9F9;
}
.wrap{
	width:80%;
	margin:0 auto;
}
.search-bar,.header-top-nav{
	float:right;
}
.search-bar input[type="text"]{
	width: 182px;
	height: 20px;
	margin-right: 0;
	color: #666565;
	background: #fff;
	padding: 3px 5px 3px 10px;
	border: 1px solid #e5e5e5;
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	margin: 0;
	outline: none;
}
.search-bar input[type="submit"]{
	margin-right: 0;
	color: white;
	background: #fff;
	padding: 5px 9px 5px 10px;
	border: 1px solid #e5e5e5;
	margin: 0;
	border-left:none;
	cursor:pointer;
	background:#4e73df;
	font-weight: bold;
}
.search-bar{
	margin: 20px 0px 12.5px 0px;
	border-radius:0.3em;
}
.header-top-nav ul li{
	display:inline-block;
	border-right: 1px solid rgba(122, 120, 120, 0.15);
	padding: 0px 13px;
}

.header-top-nav ul li:last-child{
	border:none;
	padding-right:0px;
}
.header-top-nav ul li a,.header-top-nav{
	font-family: 'Open Sans', sans-serif;
	color:#575757;
	display:inline-block;
	font-size: 0.9em;
	font-weight: bold;
}
.header-top-nav ul li a:hover{
	color:#4e73df;
}
.header-top-nav ul li a span{
	color:#D70D87;
}
/*---top-header----*/
.top-header{
	background: #4e73df;
	padding: 12px 0px;
	margin-top: 16px;
}
.logo{
	float:left;
	margin-top: 4px;
}
.top-nav{
	float:right;
}
.top-nav ul li{
	display:inline-block;
}
.top-nav ul li a{
	display:block;
	font-family: 'Open Sans', sans-serif;
	font-size: 0.9em;
	color: #fff;
	font-weight: bold;
	padding: 10px 16px;
	text-transform: uppercase;
}
.top-nav ul li:last-child{
	padding-right:0px;
}
.top-nav ul li a:hover{
	color:#000;
}
/*---content----*/
/*  GRID OF THREE   ============================================================================= */
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}
.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}
.group {
    zoom:1;
}
.grid_1_of_3{
	display: block;
	float: left;
	margin: 1% 0 1% 0.5%;
}
.grid_1_of_3:first-child { 
	margin-left: 0; 
} 
.images_1_of_3 {
	width: 33%;
	padding: 0px 0 1.1% 0;
	background: #4e73df;
	text-align:center;
	box-shadow: 0px 3px 10px rgb(233, 233, 233);
}
.images_1_of_3:hover{
	opacity:0.95;
	cursor:pointer;
}
.second{
	background:#FCA805;
}
.theree{
	background:green;
}
.images_1_of_3  img {
	max-width:100%;
	display:block;
}
.images_1_of_3  h3{
	color:#fff;
	margin-top:0.4em;
	font-size:1.2em;
	font-family: 'Open Sans', sans-serif;
	font-weight : normal;
	letter-spacing: -1px;
}
/*----products-info----*/
.products-info ul li{
	display:inline-block;
	border: 1px solid rgb(233, 233, 233);
	padding: 7px;
}
.products-info li a.cart,.products-info li a.i{
	width: 36px;
	height: 32px;
	background: url(../images/btn-cart.png);
	display:block;
}
.products-info li a.i{
	background: url(../images/btn-details.png);
}
.products-info li a.Compar{
	background: url(../images/link-compare.png);
	width: 38px;
	height:32px;
	display:block;
}
.products-info li a.Wishlist{
	background: url(../images/link-wishlist.png);
	width: 32px;
	height:32px;
	display:block;
}
.products-info li a.cart:hover,.products-info li a.i:hover,.products-info li a.Compar:hover,.products-info li a.Wishlist:hover{
	background-position: -35px bottom;
}
/***** Media Quries *****/
@media only screen and (max-width: 1024px) {
	.wrap{
		width:90%;
	}	
}
/*  GO FULL WIDTH AT LESS THAN 640 PIXELS */
@media only screen and (max-width: 640px) {
	
	.wrap{
		width:95%;
	}
	.grid_1_of_3{ 
		margin: 2% 0 2% 0%;
	}
	
	.images_1_of_3 {
		width:94%;
		padding:3%;
	}
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */
@media only screen and (max-width: 480px) {
	
	.wrap{
		width:95%;
	}
	.grid_1_of_3{ 
		margin: 2% 0 2% 0%;
	}	
	.images_1_of_3 {
		width:92%;
		padding:4%;
	}
}
/*  GRID OF Four   ============================================================================= */
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}
.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}
.group {
    zoom:1;
}
.grid_1_of_4{
	display: block;
	float:left;
	margin: 1% 1% 1% 1%;
	
}
.images_1_of_4 {
	width:23%;
	border: 1px solid rgb(233, 233, 233);
	text-align: center;
	padding: 1.5em 0px 0 0;
	background: #fff;
	transition: 0.5s ease;
	-o-transition: 0.5s ease;
	-webkit-transition: 0.5s ease;
}
.products-info:hover{
	border: 1px solid rgba(228, 228, 228, 0.6);
	box-shadow: inset 0 0px 15px rgba(0,0,0,0.12);
	-moz-box-shadow: inset 0 0px 15px rgba(0,0,0,0.12);
	-webkit-box-shadow: inset 0 0px 15px rgba(0,0,0,0.12);
}

.images_1_of_4  img{
	max-width:100%;
	display:block;
	padding-bottom: 8px;
	margin: 0 auto;
}
.images_1_of_4  h3{
	color: #575757;
	margin-top:0.3em;
	margin-bottom: 0.45em;
	font-size:1.2em;
	font-family: 'Open Sans', sans-serif;
	font-weight : normal;
	letter-spacing: -1px;
}
.images_1_of_4 a{
		font-size:0.8em;
		font-family: 'Open Sans', sans-serif;
}
.images_1_of_4 a:hover{
	color: #575757;
}
.content-grids h4 ,.content-sidebar h4{
	font-family: 'Open Sans', sans-serif;
	color: #575757;
	font-size: 1.5em;
	padding: 6px 0px 0px 0px;
}

/***** Media Quries *****/
@media only screen and (max-width: 1024px) {
	.wrap{
		width:90%;
	}	
}
/*  GO FULL WIDTH AT LESS THAN 640 PIXELS */
@media only screen and (max-width: 640px) {
	
	.wrap{
		width:95%;
	}
	.grid_1_of_4{ 
		margin: 2% 0 2% 0%;
	}	
	.images_1_of_4 {
		width:94%;
		padding:3%;
	}
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */
@media only screen and (max-width: 480px) {
	
	.wrap{
		width:95%;
	}
	.grid_1_of_4{ 
		margin: 2% 0 2% 0%;
	}	
	.images_1_of_4 {
		width:92%;
		padding:4%;
	}
}
/*-----content-grids----*/
.content-grids{
	width:80%;
	float:left;
}
/*----sidebar----*/
.content-sidebar{
	float:right;
	width:18%;
	font-family: 'Open Sans', sans-serif;
}
.content-sidebar h4{
	margin-bottom: 10px;
}
.content-sidebar ul
{
	padding-left: 0px;
}
.content-sidebar li
{
	list-style: none;
	border-bottom: 0.02px solid gray;
}
.content-sidebar li a{
	font-family: 'Open Sans', sans-serif;
	font-size: 14px;
	color: blue;
		display: block;
	padding: 12px 0px;
	background: url(../images/sepHor.png) repeat-x left bottom;
	padding-left:5px;
	text-decoration: none;
}
.content-sidebar li a:hover{
	background: url(../images/sepHor.png) repeat-x left bottom;
	background-color:#eee;
	color:#4e73df;
}
/*---footer---*/
/*  GRID OF FOUR   ============================================================================= */
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}
.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}
.group {
    zoom:1;
}
.col_1_of_4{
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
}
.col_1_of_4:first-child { margin-left: 0; } /* all browsers except IE6 and lower */
	
.span_1_of_4 {
	width: 22%;
	padding: 0 0 0 1.5%;
}
.span_1_of_4  h3,.span_1_of_4 ul li a{
	font-family: 'Open Sans', sans-serif;
	color: whitesmoke;
	font-size: 1.2em;
	padding: 6px 0px 0px 0px;
}
.span_1_of_4 ul li img{
	vertical-align:middle;
	padding-right: 5px;
}
.span_1_of_4  h3{
	text-transform: uppercase;
}
.span_1_of_4  p {
	font-size:0.8125em;
	padding:0.5em 0;
	color: #D5D2D2;
	line-height: 1.5em;
	font-family :verdana, arial, helvetica, helve, sans-serif; 	 
}
.span_1_of_4 ul li a{
	font-size:0.8em;
}
.span_1_of_4 ul li a:hover{
	color:#4e73df;
}
.footer-secondgrid ul{
	margin-top:10px;
}
/***** Media Quries *****/
@media only screen and (max-width: 1024px) {
	.wrap{
		width:95%;
	}	
}
/*  GO FULL WIDTH AT LESS THAN 640 PIXELS */
@media only screen and (max-width: 640px) and (min-width: 480px) {
	.wrap{
		width:95%;
	}
	.col_1_of_4{ 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_4 {
		width:94%;
		padding:3%;  
	}
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */
@media only screen and (max-width: 480px) {
	.wrap{
		width:95%;
	}
	.col_1_of_4{ 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_4 {
		width:92%;
		padding:4%; 
	}
}
/*---footer---*/
.footer{
	background: #181818;
}
.footer-lastgrid input[type="text"]{
	outline:none;
	background: rgb(255, 255, 255);
	border: 1px solid rgb(0, 0, 0);
	border-radius: 0.3em;
	padding:5px 7px;
}
.footer-lastgrid input[type="submit"]{
	background:none;
	border:none;
	font-size: 0.8em;
	font-family: 'Open Sans', sans-serif;
	color: yellow;
	font-weight:bold;
	text-transform:uppercase;
	cursor:pointer;
}
.footer-lastgrid ul li{
	display:inline-block;
}
.footer-lastgrid ul {
	margin-top:10px;
}
.footer-lastgrid ul li{
	padding-right:3px;
}
.footer {
	margin-top: 30px;
}
/*---about-us----*/
.about h4{
	color: #575757;
	font-size: 2em;
	font-family: 'Open Sans', sans-serif;
	font-weight: normal;
	margin-top: 7px;
	letter-spacing: -1px;
}
.about h5{
	color:#4e73df;
	font-family: 'Open Sans', sans-serif;
	font-size:0.9em;
}
.about-centre{
	margin:0px 15px;
}
.quites a{
	color: #575757;
	margin-bottom: 0.5em;
	font-size: 1em;
	line-height: 1.2;
	font-family: 'Open Sans', sans-serif;
	font-weight: normal;
	margin-top: 0px;
	letter-spacing: -1px;
	margin-top:10px;
}
.quites a span{
	color:#4e73df;
	text-transform:uppercase;
}
.about-frist li a{
	font-family: 'Open Sans', sans-serif;
	font-size:0.8em;
	color:rgb(155, 155, 155);
	transition: 0.5s ease;
	-o-transition: 0.5s ease;
	-webkit-transition: 0.5s ease;
}
.about-frist li a:hover{
	color:#4e73df;
}
.about-frist ul li{
	line-height: 1.5em;
}
/*  GRID OF THREE   ============================================================================= */
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}
.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}
.group {
    zoom:1;
}
.col_1_of_3{
	display: block;
	float:left;
	margin: 1% 0 1% 0%;
}
.col_1_of_3:first-child { margin-left: 0; }

.span_1_of_3 {
	width: 33.3333%;
	padding: 1.5% 2% 0 0;
}
.span_1_of_3  h3{
	color:#575757;
	margin-bottom:0.5em;
	font-size:1.5em;
	line-height: 1.2;
	font-family: 'Open Sans', sans-serif;
	font-weight : normal;
	margin-top: 0px;
	letter-spacing: -1px;
}

.span_1_of_3  p  ,.brand-history p{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 0.8em;
	color: rgb(155, 155, 155);
	line-height: 1.8em;
	margin-bottom: 10px;
}

/***** Media Quries *****/
@media only screen and (max-width: 1024px) {
	.wrap{
		width:95%;
	}	
}
/*  GO FULL WIDTH AT LESS THAN 640 PIXELS */
@media only screen and (max-width: 640px) and (min-width: 480px) {
	.wrap{
		width:95%;
	}
	.col_1_of_3{ 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_3 {
		width:94%;
		padding:3%;  
	}
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */
@media only screen and (max-width: 480px) {
     
     .wrap{
		width:95%;
	}		
	.col_1_of_3{ 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_3 {
		width:92%;
		padding:4%;
	}
}
/*  GRID OF Content and sidebar   ============================================================================= */
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}
.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}
.group {
    zoom:1;
}
.cont{
	display: block;
	float:left;
	margin: 1% 0 1% 0;
}
.rsidebar{
	display: block;
	float:left;
} 	
.span_2_of_3 {
	width: 63.1%;
	padding: 1.5% 3.5% 0 0;
}
.span_1_of_3 {
	width: 33.3333%;
	padding: 0% 2% 0 0;
}
.span_2_of_3  h3{
	color: #575757;
	margin-bottom:0.5em;
	font-size:1.5em;
	line-height: 1.2;
	font-weight : normal;
	margin-top: 0px;
	letter-spacing: -1px;
	font-family: 'Open Sans', sans-serif;
}
.span_2_of_3 p{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 0.8em;
	color: rgb(155, 155, 155);
	line-height: 1.8em;
	margin-bottom: 10px;
}
.products-info li a.Compar:hover{
	background-position: -39px 29px;
}
/***** Media Quries *****/
@media only screen and (max-width: 1024px) {
	.wrap{
		width:95%;
	}	
}
/*  GO FULL WIDTH AT LESS THAN 640 PIXELS */

@media only screen and (max-width: 640px) and (min-width: 480px) {
	.wrap{
		width:95%;
	}
	.cont{ 
		margin: 1% 0 1% 0%;
	}
	.rsidebar{
		margin:0;
	}
	.span_2_of_3 {
		width:94%;
		padding:3%;  
	}
	.span_1_of_3 {
		width:94%;
		padding:3%; 
	}
}


/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */

@media only screen and (max-width: 480px) {
	.wrap{
		width:95%;
	}
	.cont{ 
		margin: 1% 0 1% 0%;
	}
	.rsidebar{
		margin:0;
	}
	.span_2_of_3 {
		width:92%;
		padding:4%;
	}
	.span_1_of_3 {
		width:92%;
		padding:4%;
	}
}
/*-----back-links----*/
.back-links ul li,.details-categories ul li,.left-value-details{
	display:inline-block;
}
.back-links ul li a,.details-categories ul li a,.details-categories ul li{
	font-family: 'Open Sans', sans-serif;
	color: #575757;
	display: inline-block;
	font-size: 0.9em;
	font-weight: bold;
}
.back-links ul li a:hover,.details-categories ul li a:hover,.active1 a{
	color: #4e73df;
}
.back-links ul li img{
	padding:0px 3px;
}
.back-links{
	padding: 19px 0px 7px 0px;
}
/*---details----*/
#content{
	margin-top:10px;
}
.detalis-image{
	float: left;
    width: 30%;
	margin-left:2%;
}
.brand-value,.details-categories{
	float:left;
	margin:2% 0 0 3%;
}
.details-categories ul li a:hover{
	text-decoration:underline;
}
.left-value-details{
	float:left;
	font-weight:normal;
}
.left-value-details ul li{
	display:inline-block;
	font-family: 'Open Sans', sans-serif;
	font-size:0.8em;
}
.left-value-details ul li span{
	text-decoration:line-through;
}
.brand-value{
	font-family: 'Open Sans', sans-serif;
	color: #575757;
	display: inline-block;
	font-weight: bold;
}
.left-value-details ul li h5{
	font-size:2em;
}
.left-value-details{
	float:left;
}
.right-value-details{
	float:right;
	margin-top:5%;
	font-weight:normal;
}
.right-value-details  a{
	color:#D70D87;
}
.brand-value{
	border-bottom:1px solid #e5e5e5;
	width:70%;
	padding-bottom:10px;
}
.brand-value h3{
	border-bottom:1px solid #e5e5e5;
	padding-bottom:10px;
}
.active1  a{
	color:#4e73df;
	text-decoration:underline;
}
.brand-history{
	float:right;
	padding: 10px 0px;
	margin-left: 3%;
}
.brand-history a{
	background: none repeat scroll 0 0 #FFFFFF;
	border: 1px solid #E8E7DC;
	cursor: pointer;
	display: inline-block;
	font: 9px/21px;
	letter-spacing: 2px;
	padding: 10px;
	color: #525049;
	font-family: 'Open Sans', sans-serif;
	text-transform: uppercase;
	margin-left: 0px;
}
.brand-history a:hover{
	background: none repeat scroll 0 0 #F8F8F3;
}
.share ul li{
	display:inline-block;
}
.share{
	float:left;
	margin:1% 0 0 3%;
}
.share ul li img{
	vertical-align:middle;
	margin: 0 6px;
}
.share ul li a{
	font-family: 'Open Sans', sans-serif;
	color: #575757;
	display: inline-block;
	font-size: 0.9em;
	font-weight: bold;
}
.share ul li a:hover{
	color:#4e73df;
}
.brand-history h3{
	font-family: 'Open Sans', sans-serif;
	color: #575757;
	display: inline-block;
	font-size: 0.9em;
}
/*-----*/
.menu_container {
 	margin-top: 5%;
}
.menu_head {
	background: #4e73df;
    color: white;
    cursor: pointer;
    font-family: arial;
    font-size: 14px;
	margin: 0 0 1px 0;
    padding: 7px 11px;
	font-weight: bold;
}
.menu_body {
	background: #fff;
}
.menu_body p{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 0.8em;
	color: rgb(155, 155, 155);
	line-height: 1.8em;
	margin-bottom: 10px;
	padding:10px;
}
.plusminus{
	float:right;
}
/*---contact----*/
/*  Contact Form  ============================================================================= */
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}
.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}
.group {
    zoom:1;
}
.col{
	display: block;
	float:left;
	margin: 1% 0 0% 0%;
}
.col:first-child{
	margin-left:0;
}	
.span_2_of_3 {
	width: 63.1%;
	padding:1.5% 0; 
}

.span_2_of_3  h2,
.span_1_of_3  h2 {
	color: #575757;
	margin-top: 0.4em;
	margin-bottom: 0.7em;
	font-size: 1.5em;
	font-weight: normal;
	letter-spacing: -1px;
	font-family: 'Open Sans', sans-serif;
}
.contact-form{
	position:relative;
	padding-bottom:30px;
}
.contact-form div{
	padding:5px 0;
}
.contact-form span{
	display:block;
	font-size:0.8125em;
	color: #333;
	padding-bottom:5px;
	font-family: 'Open Sans', sans-serif;
}

.contact-form textarea{
		resize:none;
		height:120px;		
}
.company_address{
	padding-top:26px;
}
.company_address p{
	font-family: Arial, Helvetica, sans-serif;
	padding: 0.2em 0;
	font-size: 0.8125em;
	color: rgb(155, 155, 155);
	line-height: 1.5em;
}
.company_address p a{
	text-decoration:underline;
	color:#333;
	cursor:pointer;
	font-family: 'Open Sans', sans-serif;
}
.map{
	border:1px solid #C7C7C7;
	margin-bottom:15px;
}

/***** Media Quries *****/
@media only screen and (max-width: 1024px) {
	.wrap{
		width:95%;
	}	
}
/*  GO FULL WIDTH AT LESS THAN 800 PIXELS */

@media only screen and (max-width: 800px) {
	.wrap{
		width:95%;
	}
	.span_2_of_3 {
		width:94%;
		padding:3%; 
	}
	.col{ 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_3 {
		width:94%;
		padding:3%; 
	}
	.imagezoom-view {
		display: none;
	}
}

/*  GO FULL WIDTH AT LESS THAN 640 PIXELS */

@media only screen and (max-width: 640px) and (min-width: 480px) {
	.wrap{
		width:95%;
	}
	.span_2_of_3 {
		width:94%;
		padding:3%; 
	}
	.col{ 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_3 {
		width:94%;
		padding:3%; 
	}
   
   .contact-form input[type="text"],.contact-form textarea{
		width:97%;
	}
}
/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */

@media only screen and (max-width: 480px) {
	.wrap{
		width:95%;
	}
	.span_2_of_3 {
		width:90%;
		padding:5%; 
	}
	.col { 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_3 {
		width:90%;
		padding:5%; 
	}
	.contact-form input[type="text"],.contact-form textarea{
		width:92%;
	}
}
.details-categories li span{
	color:#4e73df;
	text-decoration:underline;
}
.back-links ul li a{
	font-weight:normal;
}
/*----blog----*/
.blog-grid-header h3,.blog-grid-header ul li a{
	font-family: 'Open Sans', sans-serif;
	color: #4e73df;
	display: inline-block;
	font-size: 0.88em;
	padding: 7px 0px 0px 0px;
}
.blog-grid-header ul li {
	font-family: 'Open Sans', sans-serif;
	font-size: 0.8em;
	padding: 7px 0px 0px 0px;
	color: #575757;
}
.blog-grid-header ul li{
	display:inline-block;
	margin-right: 5px;
}
.blog-grid-header ul li a img{
	vertical-align:middle;
}
.blog-grid-header ul li img{
	padding-right:5px;
}
.blog-grid-header ul li a{
	color:#575757;
}
.blog-grid-header ul li a:hover{
	color:#4e73df;
}
.blog-grid h4{
	font-family: 'Open Sans', sans-serif;
	color: #575757;
	font-size: 1.5em;
	padding: 10px 0px 10px 0px;
}
/*  GRID OF Content with Image   ============================================================================= */

.image {
	clear: both;
	padding: 0px;
	margin: 0px;
	padding: 2% 0;
	border-bottom: 1px solid rgb(238, 238, 238);
}
.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}
.group {
    zoom:1;
}
.grid {
	display: block;
	float:left;
	margin: 0% 0 0% 1.2%;
}
.grid:first-child { margin-left: 0; }

.images_3_of_1 {
	width:30.2%;
}
.detalis-image-details {
	float: right;
	width: 65%;
}
.span_2_of_3{
	width: 64%;
	padding: 0;
	margin-right: 25px;
}
.images_3_of_1  img {
	max-width:100%;
	display:block;
}
.span_2_of_3  h3{
	color:#575757;
	margin-bottom:0.3em;
	font-size:1.5em;
	font-family: 'Open Sans', sans-serif;
	font-weight : normal;
	margin-top: 0px;
	letter-spacing: -1px;
}
.span_2_of_3  p  {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 0.8em;
	color: rgb(155, 155, 155);
	line-height: 1.8em;
	margin-bottom: 10px;	
}
.span_2_of_3 .button{
	margin-top:.3em;
	line-height:1.9em;
}
.span_2_of_3 .button a{
		background: none repeat scroll 0 0 #FFFFFF;
		border: 1px solid #E8E7DC;
		cursor: pointer;
		display: inline-block;
		font-size:0.8em;
		padding:5px 10px;
		color: #525049;
		font-family: 'Open Sans', sans-serif;
		text-transform: uppercase;
		margin-left: 0px;
}
.span_2_of_3 .button a:hover{
	    color:#4e73df;
}

/***** Media Quries *****/
@media only screen and (max-width: 1024px) {
	.wrap{
		width:90%;
	}	
}

/*  GO FULL WIDTH AT LESS THAN 640 PIXELS */
@media only screen and (max-width: 640px){
	.wrap{
		width:95%;
	}
	.image{
		padding:3%;
	}
	.grid {
		margin:0;
	}	
	.images_3_of_1 {
		width:100%;	
		padding:2% 0 2% 0;	
	}
	.span_2_of_3 {
		width:100%;
	}
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */
@media only screen and (max-width: 480px) {
	
	.wrap{
		width:95%;
	}
	.image{
		padding:4%;
	}
	.grid {
		margin:0;
	}	
	.images_3_of_1 {
		width:100%;
		padding:2% 0 2% 0;		
	}
	.span_2_of_3 {
		width:100%;
	}
}
/*----pagnation----*/
.pagnation{
	float:right;
	margin-top:10px;
}
.pagnation ul li{
	display:inline-block;
}
.pagnation ul li a{
	background: none repeat scroll 0 0 #FFFFFF;
	border: 1px solid #E8E7DC;
	cursor: pointer;
	display: inline-block;
	font-size: 0.8em;
	padding: 5px 10px;
	color: #525049;
	font-family: 'Open Sans', sans-serif;
	text-transform: uppercase;
	margin-left: 0px;
}
.pagnation ul li a:hover{
	color:#4e73df;
}
/*----error-page-----*/
.error-page{
	text-align:center;
	height:200px;
	padding-bottom:100px;
}
.error-page h3,.error-page h5{
	font-family: 'Open Sans', sans-serif;
	color: #575757;
	font-size:10em;
	padding: 6px 0px 0px 0px;
}
.error-page h5{
	font-size:1.5em;
}
/*----copy-right----*/
.copy-right {
	text-align: center;
	background: #181818;
	padding: 0px 0px 10px 0px;
}
.copy-right p,.copy-right a{
	font-family: 'Open Sans', sans-serif;
	color: #D5D2D2;
	display: inline-block;
	font-size: 0.9em;
	font-weight: normal;
}
.copy-right a:hover{
	color:#4e73df;
}
/*----responsive-layouts----*/
@media screen and (max-width: 1366px) {
	.wrap{
		width:90%;
	}
	.span_1_of_4 {
		width: 23%;
		padding: 0px;
	}
}
@media screen and (max-width:1280px){
	.wrap{
		width:90%;
	}
	.products-info ul li {
		padding: 5px;
	}
	.span_1_of_4 {
		width: 24%;
		padding: 0px;
		margin: 4.5px;
	}
}
@media screen and (max-width:1024px){
	.wrap{
		width:90%;
	}
	.images_1_of_4 {
		width: 32%;
		padding-bottom: 10px;
	}
	.images_1_of_4:last-child{
		display:none;
	}
	.span_2_of_3 {
		width: 63%;
	}
	.footer-lastgrid ul li {
		display: block;
		padding: 5px 0px;
	}
	.top-header {
		padding: 7px 0px;
	}
	.header-top-nav ul li {
		padding: 0px 8px;
	}
	.images_1_of_3 h3 {
		font-size:1em;
	}
	.detalis-image-details {
		width: 72%;
	}
}
@media screen and (max-width:800px){
	.wrap{
		width:760px;
	}
	.products-info ul li {
		padding: 0px;
		border:none;
	}
	.images_1_of_3 h3 {
		font-size: 0.9em;
	}
	.span_1_of_4 {
		width: 23%;
	}
	.footer-lastgrid input[type="text"] {
		width: 120px;
	}
	.span_1_of_3 {
		width: 100%;
		padding:0px;
	}
	.about-centre img{
		width:100%;
	}
	.span_2_of_3 {
		width: 100%;
	}
	#wrap ul li {
		width: 47.5%;
	}
	.add-to-cart-button {
		margin-top: 123px;
	}
}
@media screen and (max-width:768px){
	.wrap {
    width: 736px;
}
}
@media screen and (max-width:736px){
	.wrap {
    width: 706px;
}
.top-nav ul li a {
    padding: 10px 13px;
}
}
@media screen and (max-width:667px){
	.wrap {
    width: 640px;
}
.top-nav ul li a {
    padding: 10px 6px;
}
}
@media screen and (max-width:640px){
	.wrap{
		width:90%;
	}
	.logo ,.header-top-nav{
		float:none;
		text-align:center;
	}
	.header-top-nav{
		text-align:left;
	}
	.header-top-nav ul li {
		padding: 0px 3px;
	}
	.images_1_of_3 img{
		width:100%;
	}
	.content-grids {
		width: 100%;
		float: none;
	}
	.images_1_of_4 {
		width: 24.983%;
		margin-right:2%;
	}
	.products-info ul li {
		padding: 4px;
	}
	.products-info ul li:nth-child(2),.products-info ul li:nth-child(3),.products-info ul li:nth-child(4){
		display:none;
	}
	.content-sidebar {
		width:100%;
	}
	.span_1_of_4 {
		width: 47.6%;
	}
	.detalis-image-details {
		width: 64%;
	}
	.top-nav {
    float: right;
    width: 100%;
    text-align: center;
}
.top-nav ul li a {
    padding: 12px 16px;
}
.search-bar, .header-top-nav {
    float: right;
    text-align: center;
    width: 100%;
}
}
@media screen and (max-width:600px){
.images_1_of_4 {
    width: 24.5%;
    margin-right: 2%;
}
}
@media screen and (max-width:568px){
.top-nav ul li a {
    padding: 12px 12px;
}
}
@media screen and (max-width:480px){
	.wrap{
		width:90%;
	}
	.top-nav ul li a {
		padding:6px 4px;
	}
	.header-top-nav ul li a{
		font-size: 0.88em;
	}
	.images_1_of_4 {
		width: 22.85%;
	}
	.span_1_of_4 {
		width: 100%;
	}
	.header-top-nav,.search-bar{
		display:none;
	}
	.top-header {
		margin:0px;
	}
	.detalis-image {
		float: none;
		width: 100%;
		text-align:center;
	}
	.detalis-image-details {
		float:none;
		width: 100%;
	}
	.details-categories{
		margin:0px;
		margin-top:10px;
	}
	.brand-value {
		margin:0px;
		width:100%;
	}
	.brand-history{
		margin:0px;
	}
	.logo{
		padding:20px 0px;
	}
}
@media screen and (max-width:414px){
.images_1_of_4 {
    width: 92%;
}
.images_1_of_4 {
    margin-right: 0%;
}
.top-nav ul li a {
    padding: 6px 2px;
}
a#show_cart {
    width: 90%;
	    padding: 7px 0;
}
}
@media screen and (max-width:384px){
.top-nav ul li a {
    font-size: 0.8em;
}
}
@media screen and (max-width:320px){
.wrap {
    width: 95%;
}
.top-nav ul li a {
    font-size: 0.7125em;
	padding: 6px 1px;
}
}

</style>