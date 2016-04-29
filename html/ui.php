<?php
	include "../lang/lang.php";
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-hk">

<head>

	<!--META + CSS-->
	<?php include "../include/common/include_css.html" ?>

	<!--Individual-->
	<!--<link rel="stylesheet" href="../css/index.css" type="text/css" />-->
	
	<title>Site Title</title>
</head>

<body ontouchstart="">
	
	<div class="wrapper template">
		
		<div class="main">
			<?php include "include/header.php" ?>

			<div class="content">

				<?php include "include/mobileHeader.php" ?>

				<div class="innerContent">
					
					<div class="section bgColor-black-2 aCenter">
						<div class="sectionInner">
							<a href="javascript:scrollto('.section_typo')" class="commonBtn btnStyle3"><span>TYPOGRAPHY</span></a>
							<a href="javascript:scrollto('.section_iconfont')" class="commonBtn btnStyle3"><span>ICON FONTS</span></a>
							<a href="javascript:scrollto('.section_edior')" class="commonBtn btnStyle3"><span>EDITOR CSS</span></a>
							<a href="javascript:scrollto('.section_color')" class="commonBtn btnStyle3"><span>COLOR</span></a>
							<a href="javascript:scrollto('.section_grid')" class="commonBtn btnStyle3"><span>GRID</span></a>
							<a href="javascript:scrollto('.section_gridBox')" class="commonBtn btnStyle3"><span>GRID BOX</span></a>
							<a href="javascript:scrollto('.section_formSection')" class="commonBtn btnStyle3"><span>FORM</span></a>
							<a href="javascript:scrollto('.section_button')" class="commonBtn btnStyle3"><span>BUTTON</span></a>
							<a href="javascript:scrollto('.section_popup')" class="commonBtn btnStyle3"><span>POPUP</span></a>
							<a href="javascript:scrollto('.section_slider')" class="commonBtn btnStyle3"><span>SLIDER</span></a>
						</div>
					</div>
					
					<div class="section bgColor-black-3 section_typo">
						<div class="sectionInner">
							<div class="colRow clearFix">
								<div class="col-1-2 vaMiddle">
									<div class="colInner">
										<h1>TYPOGRAPHY</h1>
									</div>
								</div><div class="col-1-2 vaMiddle aRight">
									<div class="colInner">
										<h4>HEADING / PARAGRAPH / LISTING</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="section">
						<div class="sectionInner">
							<div class="colRow clearFix">
								<div class="fLeft col-1-3">
									<div class="colInner">
										<h1>FONT FAMILY</h1>
									</div>
								</div>
								<div class="fLeft col-2-3">
									<div class="colInner">
										<h1>OpenSans-Light</h1>
										<h1 class="fontTimes">Times New Roman</h1>
										<h1>微軟正黑體</h1>
									</div>
								</div>
							</div>
							<div class="colRow clearFix">
								<div class="fLeft col-1-3">
									<div class="colInner">
										<h1>HEADING 1</h1>
										<h2>HEADING 2</h2>
										<h3>HEADING 3</h3>
									</div>
								</div>
								<div class="fLeft col-2-3">
									<div class="colInner">
										<h3>PARAGRAPH</h3>
										<p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipiscing elit. Quisque mollis lacus augue, a hendrerit leo tristique vitae. Consectetur adipiscing elit. Integer posuere erat a ante. Mauris non ipsum molestie, sagittis elit ac, vulputate odio.Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipiscing elit. Quisque mollis lacus augue, a hendrerit leo tristique vitae.</p>
										<p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipiscing elit. Quisque mollis lacus augue, a hendrerit leo tristique vitae. Consectetur adipiscing elit. Integer posuere erat a ante. Mauris non ipsum molestie, sagittis elit ac, vulputate odio.Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipiscing elit. Quisque mollis lacus augue, a hendrerit leo tristique vitae.</p>
									</div>
								</div>
							</div>
							<div class="colRow clearFix">
								<div class="fLeft col-1-4">
									<div class="colInner">
										<h2>disc</h2>
										<ul class="disc">
											<li>First item</li>
											<li>Second item</li>
											<li>Third item</li>
											<li>Fourth item</li>
											<li>Fives item</li>
										</ul>
									</div>
								</div>
								<div class="fLeft col-1-4">
									<div class="colInner">
										<h2>decimal</h2>
										<ul class="decimal">
											<li>First item</li>
											<li>Second item</li>
											<li>Third item</li>
											<li>Fourth item</li>
											<li>Fives item</li>
										</ul>
									</div>
								</div>
								<div class="fLeft col-1-4">
									<div class="colInner">
										<h2>lower-alpha</h2>
										<ul class="lower-alpha">
											<li>First item</li>
											<li>Second item</li>
											<li>Third item</li>
											<li>Fourth item</li>
											<li>Fives item</li>
										</ul>
									</div>
								</div>
								<div class="fLeft col-1-4">
									<div class="colInner">
										<h2>lower-roman</h2>
										<ul class="lower-roman">
											<li>First item</li>
											<li>Second item</li>
											<li>Third item</li>
											<li>Fourth item</li>
											<li>Fives item</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="section bgColor-black-3 section_iconfont">
						<div class="sectionInner">
							<div class="colRow clearFix">
								<div class="col-1-2 vaMiddle">
									<div class="colInner">
										<h1>ICON FONTS</h1>
									</div>
								</div><div class="col-1-2 vaMiddle aRight">
									<div class="colInner">
										<h4>class="icon-*"</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="section">
						<div class="sectionInner editor">
							<h2>USAGE</h2>
<pre>
	class="icon-instagram"
</pre>
							<div class="sep"></div>
							<h2>ICON LIST</h2>
							<table>
								<tr>
									<td>
										<span class="icon-arrowLeft"></span> icon-arrowLeft
									</td>
									<td>
										<span class="icon-arrowRight"></span> icon-arrowRight
									</td>
									<td>
										<span class="icon-arrowUp"></span> icon-arrowUp
									</td>
								</tr>
								<tr>
									<td>
										<span class="icon-arrowDown"></span> icon-arrowDown
									</td>
									<td>
										<span class="icon-cross"></span> icon-cross
									</td>
									<td>
										<span class="icon-cross"></span> icon-cross
									</td>
								</tr>
								<tr>
									<td>
										<span class="icon-plus"></span> icon-plus
									</td>
									<td>
										<span class="icon-reload"></span> icon-reload
									</td>
									<td>
										<span class="icon-search"></span> icon-search
									</td>
								</tr>
								<tr>
									<td>
										<span class="icon-tel"></span> icon-tel
									</td>
									<td>
										<span class="icon-pin"></span> icon-pin
									</td>
									<td>
										<span class="icon-email"></span> icon-email
									</td>
								</tr>
								<tr>
									<td>
										<span class="icon-facebook"></span> icon-facebook
									</td>
									<td>
										<span class="icon-instagram"></span> icon-instagram
									</td>
									<td>
										<span class="icon-wechat"></span> icon-wechat
									</td>
								</tr>
								<tr>
									<td>
										<span class="icon-weibo"></span> icon-weibo
									</td>
									<td>
										<span class="icon-whatsapp"></span> icon-whatsapp
									</td>
									<td>
										<span class="icon-youtube"></span> icon-youtube
									</td>
								</tr>
								<tr>
									<td>
										<span class="icon-tick"></span> icon-tick
									</td>
									<td>
										<span class="icon-share"></span> icon-share
									</td>
									<td></td>
								</tr>
							</table>
							
						</div>
					</div>
					
					<div class="section bgColor-black-3 section_edior">
						<div class="sectionInner">
							<div class="colRow clearFix">
								<div class="col-1-2 vaMiddle">
									<div class="colInner">
										<h1>EDITOR CSS</h1>
									</div>
								</div><div class="col-1-2 vaMiddle aRight">
									<div class="colInner">
										<h4>class="editor"</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="section">
						<div class="sectionInner editor">
							<div class="colRow clearFix">
								<div class="fLeft col-1-3 mobile-100">
									<div class="colInner">
										<h1>HEADING 1</h1>
										<h2>HEADING 2</h2>
										<h3>HEADING 3</h3>
										<h4>HEADING 4</h4>
										<h5>HEADING 5</h5>
										<h6>HEADING 6</h6>
									</div>
								</div>
								<div class="fLeft col-2-3 mobile-100">
									<div class="colInner">
										<table>
											<thead>
												<tr>
													<td>#ID</td>
													<td>Item</td>
													<td>Description</td>
													<td>Quantity</td>
													<td>Unit Cost</td>
													<td>Total</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Software</td>
													<td>LTS Versions</td>
													<td>21</td>
													<td>$321</td>
													<td>$3452</td>
												</tr>
												<tr>
													<td>1</td>
													<td>Software</td>
													<td>Support</td>
													<td>234</td>
													<td>$6356</td>
													<td>$23423</td>
												</tr>
												<tr>
													<td>1</td>
													<td>Software</td>
													<td>Sofware Collection</td>
													<td>4534</td>
													<td>$354</td>
													<td>$23434</td>
												</tr>
												<tr>
													<td>1</td>
													<td>Software</td>
													<td>Support</td>
													<td>234</td>
													<td>$6356</td>
													<td>$23423</td>
												</tr>
												<tr>
													<td>1</td>
													<td>Software</td>
													<td>Sofware Collection</td>
													<td>4534</td>
													<td>$354</td>
													<td>$23434</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="colRow clearFix">
								<div class="fLeft col-1-4 col-mb-1-2">
									<div class="colInner">
										<h2>UL</h2>
										<ul>
											<li>First item</li>
											<li>Second item</li>
											<li>Third item</li>
											<li>
												Fourth item
												<ul>
													<li>First item</li>
													<li>Second item</li>
													<li>Third item</li>
													<li>Fourth item</li>
													<li>Fives item</li>
												</ul>
											</li>
											<li>Fives item</li>
										</ul>
									</div>
								</div>
								<div class="fLeft col-1-4 col-mb-1-2">
									<div class="colInner">
										<h2>OL</h2>
										<ol>
											<li>First item</li>
											<li>Second item</li>
											<li>Third item</li>
											<li>
												Fourth item
												<ul>
													<li>First item</li>
													<li>Second item</li>
													<li>Third item</li>
													<li>Fourth item</li>
													<li>Fives item</li>
												</ul>
											</li>
											<li>Fives item</li>
										</ol>
									</div>
								</div>
								<div class="fLeft col-2-4 mobile-100">
									<div class="colInner">
										<h3>PARAGRAPH</h3>
										<p>
											<strong>strong</strong> <u>underline</u> subscript<sub>™</sub> superscript<sup>™</sup>
										</p>
										<p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipiscing elit. Quisque mollis lacus augue, a hendrerit leo tristique vitae. Consectetur adipiscing elit. Integer posuere erat a ante. Mauris non ipsum molestie, sagittis elit ac, vulputate odio.Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipiscing elit. Quisque mollis lacus augue, a hendrerit leo tristique vitae.</p>
										<p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipiscing elit. Quisque mollis lacus augue, a hendrerit leo tristique vitae. Consectetur adipiscing elit. Integer posuere erat a ante. Mauris non ipsum molestie, sagittis elit ac, vulputate odio.Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipiscing elit. Quisque mollis lacus augue, a hendrerit leo tristique vitae.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="section bgColor-black-3 section_color">
						<div class="sectionInner">
							<div class="colRow clearFix">
								<div class="col-1-2 vaMiddle">
									<div class="colInner">
										<h1>COLOR</h1>
									</div>
								</div><div class="col-1-2 vaMiddle aRight">
									<div class="colInner">
										<h4>BACKGROUND / TEXT COLOR</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="section">
						<div class="sectionInner">
							<h2 class="color-black-1">color-black-1</h2>
							<h2 class="color-black-2">color-black-2</h2>
							<h2 class="color-black-3 bgColor-black-1">color-black-3</h2>
							<div class="sep"></div>
							<div class="colRow clearFix">
								<div class="fLeft col-1-5">
									<div class="colInner">
										<div class="gridBox-square">
											<div class="gridBoxInner aCenter bgColor-black-1 color-black-3">
												<div class="ghost"></div><div class="vaMiddle">
													<h3>bgColor-black-1</h3>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="fLeft col-1-5">
									<div class="colInner">
										<div class="gridBox-square">
											<div class="gridBoxInner aCenter bgColor-black-2 color-black-3">
												<div class="ghost"></div><div class="vaMiddle">
													<h3>bgColor-black-2</h3>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="fLeft col-1-5">
									<div class="colInner">
										<div class="gridBox-square">
											<div class="gridBoxInner aCenter bgColor-black-3 color-black-1">
												<div class="ghost"></div><div class="vaMiddle">
													<h3>bgColor-black-3</h3>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="section bgColor-black-3 section_grid">
						<div class="sectionInner">
							<div class="colRow clearFix">
								<div class="col-1-2 vaMiddle">
									<div class="colInner">
										<h1>GRID</h1>
									</div>
								</div><div class="col-1-2 vaMiddle aRight">
									<div class="colInner">
										<h4>COLUMN 1-2 / 1-3 / 1-4 / 1-5</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="section">
						<div class="sectionInner">
							<div class="colRow clearFix">
								<div class="fLeft col-1-2 mobile-100">
									<div class="colInner">
										<div class="box aCenter bgColor-black-2">
											<h3 class="color-black-3"><br>1/2<br><br></h3>
										</div>
									</div>
								</div>
								<div class="fLeft col-1-2 mobile-100">
									<div class="colInner">
										<div class="box aCenter bgColor-black-2">
											<h3 class="color-black-3"><br>1/2<br><br></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sep"></div>
							<div class="colRow clearFix">
								<div class="fLeft col-1-3 mobile-100">
									<div class="colInner">
										<div class="box aCenter bgColor-black-2">
											<h3 class="color-black-3"><br>1/3<br><br></h3>
										</div>
									</div>
								</div>
								<div class="fLeft col-1-3 mobile-100">
									<div class="colInner">
										<div class="box aCenter bgColor-black-2">
											<h3 class="color-black-3"><br>1/3<br><br></h3>
										</div>
									</div>
								</div>
								<div class="fLeft col-1-3 mobile-100">
									<div class="colInner">
										<div class="box aCenter bgColor-black-2">
											<h3 class="color-black-3"><br>1/3<br><br></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sep"></div>
							<div class="colRow clearFix">
								<div class="fLeft col-1-4 mobile-100">
									<div class="colInner">
										<div class="box aCenter bgColor-black-2">
											<h3 class="color-black-3"><br>1/4<br><br></h3>
										</div>
									</div>
								</div>
								<div class="fLeft col-1-4 mobile-100">
									<div class="colInner">
										<div class="box aCenter bgColor-black-2">
											<h3 class="color-black-3"><br>1/4<br><br></h3>
										</div>
									</div>
								</div>
								<div class="fLeft col-1-4 mobile-100">
									<div class="colInner">
										<div class="box aCenter bgColor-black-2">
											<h3 class="color-black-3"><br>1/4<br><br></h3>
										</div>
									</div>
								</div>
								<div class="fLeft col-1-4 mobile-100">
									<div class="colInner">
										<div class="box aCenter bgColor-black-2">
											<h3 class="color-black-3"><br>1/4<br><br></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sep"></div>
							<div class="colRow clearFix">
								<div class="fLeft col-1-5 mobile-100">
									<div class="colInner">
										<div class="box aCenter bgColor-black-2">
											<h3 class="color-black-3"><br>1/5<br><br></h3>
										</div>
									</div>
								</div>
								<div class="fLeft col-1-5 mobile-100">
									<div class="colInner">
										<div class="box aCenter bgColor-black-2">
											<h3 class="color-black-3"><br>1/5<br><br></h3>
										</div>
									</div>
								</div>
								<div class="fLeft col-1-5 mobile-100">
									<div class="colInner">
										<div class="box aCenter bgColor-black-2">
											<h3 class="color-black-3"><br>1/5<br><br></h3>
										</div>
									</div>
								</div>
								<div class="fLeft col-1-5 mobile-100">
									<div class="colInner">
										<div class="box aCenter bgColor-black-2">
											<h3 class="color-black-3"><br>1/5<br><br></h3>
										</div>
									</div>
								</div>
								<div class="fLeft col-1-5 mobile-100">
									<div class="colInner">
										<div class="box aCenter bgColor-black-2">
											<h3 class="color-black-3"><br>1/5<br><br></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sep"></div>
							<div class="colRow clearFix">
								<div class="fLeft col-3-5">
									<div class="colInner">
										<div class="box aCenter bgColor-black-2">
											<h3 class="color-black-3"><br>3/5<br><br></h3>
										</div>
									</div>
								</div>
								<div class="fLeft col-2-5">
									<div class="colInner">
										<div class="box aCenter bgColor-black-2">
											<h3 class="color-black-3"><br>2/5<br><br></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sep"></div>
							<div class="colRow clearFix">
								<div class="fLeft col-3-4">
									<div class="colInner">
										<div class="box aCenter bgColor-black-2">
											<h3 class="color-black-3"><br>3/4<br><br></h3>
										</div>
									</div>
								</div>
								<div class="fLeft col-1-4">
									<div class="colInner">
										<div class="box aCenter bgColor-black-2">
											<h3 class="color-black-3"><br>1/4<br><br></h3>
										</div>
									</div>
								</div>
							</div>
							<h1 class="aCenter">and more...</h1>
						</div>
					</div>
					
					<div class="section bgColor-black-3 section_gridBox">
						<div class="sectionInner">
							<div class="colRow clearFix">
								<div class="col-2-3 vaMiddle">
									<div class="colInner">
										<h1>GRID BOX + GRID</h1>
									</div>
								</div><div class="col-1-3 vaMiddle aRight">
									<div class="colInner">
										<h4>class="gridBox-*"</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="section">
						<div class="sectionInner">
							<div class="colRow clearFix">
								<div class="fLeft col-1-3 mobile-100">
									<div class="gridBox-square">
										<div class="gridBoxInner padding bgColor-black-2 color-black-3 aCenter">
											<div class="ghost"></div><div class="vaMiddle">
												gridBox-square
											</div>
										</div>
									</div>
								</div>
								<div class="fLeft col-1-3 mobile-100">
									<div class="fLeft col-2-3">
										<div class="gridBox-square">
											<div class="gridBoxInner padding bgColor-black-2 color-black-3 aCenter">
												<div class="ghost"></div><div class="vaMiddle">
													gridBox-square
												</div>
											</div>
										</div>
										<div class="fLeft col-1-2">
											<div class="gridBox-square">
												<div class="gridBoxInner padding bgColor-black-2 color-black-3 aCenter">
													<div class="ghost"></div><div class="vaMiddle">
														gridBox-square
													</div>
												</div>
											</div>
										</div>
										<div class="fLeft col-1-2">
											<div class="gridBox-square">
												<div class="gridBoxInner padding bgColor-black-2 color-black-3 aCenter">
													<div class="ghost"></div><div class="vaMiddle">
														gridBox-square
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="fLeft col-1-3">
										<div class="gridBox-square">
											<div class="gridBoxInner padding bgColor-black-2 color-black-3 aCenter">
												<div class="ghost"></div><div class="vaMiddle">
													gridBox-square
												</div>
											</div>
										</div>
										<div class="gridBox-square">
											<div class="gridBoxInner padding bgColor-black-2 color-black-3 aCenter">
												<div class="ghost"></div><div class="vaMiddle">
													gridBox-square
												</div>
											</div>
										</div>
										<div class="gridBox-square">
											<div class="gridBoxInner padding bgColor-black-2 color-black-3 aCenter">
												<div class="ghost"></div><div class="vaMiddle">
													gridBox-square
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="fLeft col-1-3 mobile-100">
									<div class="fLeft col-1-2">
										<div class="gridBox-square">
											<div class="gridBoxInner padding bgColor-black-2 color-black-3 aCenter">
												<div class="ghost"></div><div class="vaMiddle">
													gridBox-square
												</div>
											</div>
										</div>
										<div class="gridBox-square">
											<div class="gridBoxInner padding bgColor-black-2 color-black-3 aCenter">
												<div class="ghost"></div><div class="vaMiddle">
													gridBox-square
												</div>
											</div>
										</div>
									</div>
									<div class="fLeft col-1-2">
										<div class="gridBox-square">
											<div class="gridBoxInner padding bgColor-black-2 color-black-3 aCenter">
												<div class="ghost"></div><div class="vaMiddle">
													gridBox-square
												</div>
											</div>
										</div>
										<div class="gridBox-square">
											<div class="gridBoxInner padding bgColor-black-2 color-black-3 aCenter">
												<div class="ghost"></div><div class="vaMiddle">
													gridBox-square
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="colRow clearFix">
								<div class="fLeft col-1-3 mobile-100">
									<div class="gridBox-long-1-2">
										<div class="gridBoxInner padding bgColor-black-2 color-black-3 aCenter">
											<div class="ghost"></div><div class="vaMiddle">
												gridBox-long-1-2
											</div>
										</div>
									</div>
									<div class="fLeft col-1-2">
										<div class="gridBox-tall">
											<div class="gridBoxInner padding bgColor-black-2 color-black-3 aCenter">
												<div class="ghost"></div><div class="vaMiddle">
													gridBox-tall
												</div>
											</div>
										</div>
									</div>
									<div class="fLeft col-1-2">
										<div class="gridBox-square">
											<div class="gridBoxInner padding bgColor-black-2 color-black-3 aCenter">
												<div class="ghost"></div><div class="vaMiddle">
													gridBox-square
												</div>
											</div>
										</div>
										<div class="gridBox-square">
											<div class="gridBoxInner padding bgColor-black-2 color-black-3 aCenter">
												<div class="ghost"></div><div class="vaMiddle">
													gridBox-square
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="fRight col-2-3 mobile-100">
									<div class="gridBox-long-1-4">
										<div class="gridBoxInner padding bgColor-black-2 color-black-3 aCenter">
											<div class="ghost"></div><div class="vaMiddle">
												gridBox-long-1-4
											</div>
										</div>
									</div>
								</div>
							</div>
							<h1 class="aCenter">and more...</h1>
						</div>
					</div>
					
					<div class="section bgColor-black-3 section_formSection">
						<div class="sectionInner">
							<div class="colRow clearFix">
								<div class="col-1-2 vaMiddle">
									<div class="colInner">
										<h1>FORM</h1>
									</div>
								</div><div class="col-1-2 vaMiddle aRight">
									<div class="colInner">
										<h4>INPUT / SELECT / CHECKBOX</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="section">
						<div class="sectionInner">
							<div class="colRow clearFix">
								<div class="fLeft col-1-2 mobile-100">
									<div class="colInner">
										<div class="inputBox">
											<input type="text"/>
											<a class="hints" href="javascript:void(0);">NAME</a>
										</div>
										<div class="inputBox">
											<input type="email"/>
											<a class="hints" href="javascript:void(0);">EMAIL</a>
										</div>
										<div class="inputBox">
											<input type="email" onpaste="return false;"/>
											<a class="hints" href="javascript:void(0);">RE ENTER EMAIL(NO PASTE)</a>
										</div>
										<div class="inputBox">
											<input type="tel"/>
											<a class="hints" href="javascript:void(0);">TEL</a>
										</div>
										<div class="inputBox">
											<select>
												<option>OPTION 1</option>
												<option>OPTION 2</option>
												<option>OPTION 3</option>
											</select>
										</div>
									</div>
								</div>
								<div class="fLeft col-1-2 mobile-100">
									<div class="colInner">
										<div class="inputBox">
											<label>
												<input type="radio" name="gender" value="male">
												<span class="radiobox"></span>Male
											</label>
											<label>
												<input type="radio" name="gender" value="female">
												<span class="radiobox"></span>Female
											</label>
											<label>
												<input type="radio" name="gender" value="other">
												<span class="radiobox"></span>Other
											</label>
										</div>
										<div class="inputBox">
											<textarea></textarea>
											<a class="hints" href="javascript:void(0);">TEXTAREA</a>
										</div>
										<div class="inputBox checkRow">
											<label>
												<input type="checkbox">
												<span class="checkbox"></span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla.
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="section bgColor-black-3 section_button">
						<div class="sectionInner">
							<div class="colRow clearFix">
								<div class="col-1-2 vaMiddle">
									<div class="colInner">
										<h1>BUTTON</h1>
									</div>
								</div><div class="col-1-2 vaMiddle aRight">
									<div class="colInner">
										<h4>BORDER BUTTON</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="section">
						<div class="sectionInner">
							<div class="colRow clearFix">
								<div class="fLeft col-1-4 mobile-100">
									<div class="colInner">
										<div class="gridBox-square">
											<div class="gridBoxInner bgColor-black-3 aCenter">
												<div class="ghost"></div><div class="vaMiddle">
													<a href="#" class="commonBtn"><span>CommonBtn</span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="fLeft col-1-4 mobile-100">
									<div class="colInner">
										<div class="gridBox-square">
											<div class="gridBoxInner bgColor-black-3 aCenter">
												<div class="ghost"></div><div class="vaMiddle">
													<a href="#" class="commonBtn btnStyle1"><span>btnStyle1</span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="fLeft col-1-4 mobile-100">
									<div class="colInner">
										<div class="gridBox-square">
											<div class="gridBoxInner bgColor-black-2 aCenter">
												<div class="ghost"></div><div class="vaMiddle">
													<a href="#" class="commonBtn btnStyle2"><span>btnStyle2</span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="fLeft col-1-4 mobile-100">
									<div class="colInner">
										<div class="gridBox-square">
											<div class="gridBoxInner bgColor-black-2 aCenter">
												<div class="ghost"></div><div class="vaMiddle">
													<a href="#" class="commonBtn btnStyle3"><span>btnStyle3</span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="section bgColor-black-3 section_popup">
						<div class="sectionInner">
							<div class="colRow clearFix">
								<div class="col-1-2 vaMiddle">
									<div class="colInner">
										<h1>POP UP</h1>
									</div>
								</div><div class="col-1-2 vaMiddle aRight">
									<div class="colInner">
										<h4>ALERT / TNC / VIDEO</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="section">
						<div class="sectionInner">
							<p><a href="javascript:void(0);" onClick="popupBox($('.tncPopup'))">Open tnc popup</a></p>
							<p><a href="javascript:void(0);" onClick="videoPop('PlcLd_-PI58')">Open youtube video popup</a></p>
							<p><a href="javascript:void(0);" onClick="alertMsg('Alert Msg Here')">Open alert</a></p>
						</div>
					</div>
					
					<div class="section bgColor-black-3 section_slider">
						<div class="sectionInner">
							<div class="colRow clearFix">
								<div class="col-1-2 vaMiddle">
									<div class="colInner">
										<h1>SLIDER</h1>
									</div>
								</div><div class="col-1-2 vaMiddle aRight">
									<div class="colInner">
										<h4>KITKIT SLIDER</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="section">
						<div class="sectionInner">
						
							<h2 class="aCenter">EXAMPLE - 3 item in a slide</h2>
						
							<div class="colRow">
								<div class="sliderExample1 sliderWrapper">

									<a class="sliderBtnPrev icon-arrowLeft" href="#"></a>
									<a class="sliderBtnNext icon-arrowRight" href="#"></a>

									<div class="sliderContainer">
										<div class="slider" >
											<div class="slides">
												<div class="sliderItem col-1-3 vaMiddle">
													<div class="colInner">
														<a href="https://www.google.com/">
															<img class="img100" src="http://dummyimage.com/320x320/5AB176/fff">
														</a>
													</div>
												</div><div class="sliderItem col-1-3 vaMiddle">
													<div class="colInner">
														<img class="img100" src="http://dummyimage.com/320x320/BD8FAC/fff">
													</div>
												</div><div class="sliderItem col-1-3 vaMiddle">
													<div class="colInner">
														<img class="img100" src="http://dummyimage.com/320x320/F8A584/fff">
													</div>
												</div>
											</div>
											<div class="slides">
												<div class="sliderItem col-1-3 vaMiddle">
													<div class="colInner">
														<img class="img100" src="http://dummyimage.com/320x320/6FB2C3/fff">
													</div>
												</div><div class="sliderItem col-1-3 vaMiddle">
													<div class="colInner">
														<img class="img100" src="http://dummyimage.com/320x320/06833E/fff">
													</div>
												</div><div class="sliderItem col-1-3 vaMiddle">
													<div class="colInner">
														<img class="img100" src="http://dummyimage.com/320x320/A225C7/fff">
													</div>
												</div>
											</div>
											<div class="slides">
												<div class="sliderItem col-1-3 vaMiddle">
													<div class="colInner">
														<img class="img100" src="http://dummyimage.com/320x320/1AD59E/fff">
													</div>
												</div><div class="sliderItem col-1-3 vaMiddle">
													<div class="colInner">
														<img class="img100" src="http://dummyimage.com/320x320/8A1A1F/fff">
													</div>
												</div><div class="sliderItem col-1-3 vaMiddle">
													<div class="colInner">
														<img class="img100" src="http://dummyimage.com/320x320/52A4BB/fff">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="sliderBulletContainer">
										<div class="sliderBullet"></div>
									</div>
								</div>
							</div>
							
							<div class="aCenter">
								<br>
								<br>
								<a href="javascript:gSliderExample1.transition('next', 1 );" class="commonBtn btnStyle1"><span>Go to 2nd Slide</span></a>
								<a href="javascript:gSliderExample1.changePattern(3);" class="commonBtn btnStyle1"><span>Change Pattern 3</span></a>
								<a href="javascript:gSliderExample1.changePattern(1);" class="commonBtn btnStyle1"><span>Change Pattern 1</span></a>
							</div>
							
							<div class="sep"></div>
							
							<h2 class="aCenter">EXAMPLE - with overflow visible</h2>
							
							<style>
								.sliderExample2,
								.sliderExample3{
									max-width: 320px;
									margin: 0 auto;
								}
								.sliderExample2 .sliderContainer,
								.sliderExample3 .sliderContainer{
									overflow: inherit;
								}
							</style>
							
							<div class="sliderExample2 sliderWrapper">

								<a class="sliderBtnPrev icon-arrowLeft" href="#"></a>
								<a class="sliderBtnNext icon-arrowRight" href="#"></a>

								<div class="sliderContainer">
									<div class="slider" >
										<div class="slides">
											<div class="sliderItem">
												<img class="img100" src="http://dummyimage.com/320x320/5AB176/fff">
											</div>
										</div>
										<div class="slides">
											<div class="sliderItem">
												<img class="img100" src="http://dummyimage.com/320x320/054E49/fff">
											</div>
										</div>
										<div class="slides">
											<div class="sliderItem">
												<img class="img100" src="http://dummyimage.com/320x320/FCDC5B/fff">
											</div>
										</div>
										<div class="slides">
											<div class="sliderItem">
												<img class="img100" src="http://dummyimage.com/320x320/B121CE/fff">
											</div>
										</div>
										<div class="slides">
											<div class="sliderItem">
												<img class="img100" src="http://dummyimage.com/320x320/6FB2C3/fff">
											</div>
										</div>
										<div class="slides">
											<div class="sliderItem">
												<img class="img100" src="http://dummyimage.com/320x320/C988E9/fff">
											</div>
										</div>
										<div class="slides">
											<div class="sliderItem">
												<img class="img100" src="http://dummyimage.com/320x320/621334/fff">
											</div>
										</div>
									</div>
								</div>
								<div class="sliderBulletContainer">
									<div class="sliderBullet"></div>
								</div>
							</div>
							
							<div class="sep"></div>
							
							<h2 class="aCenter">EXAMPLE - with overflow visible + No Loop</h2>
							
							<div class="sliderExample3 sliderWrapper">

								<a class="sliderBtnPrev icon-arrowLeft" href="#"></a>
								<a class="sliderBtnNext icon-arrowRight" href="#"></a>

								<div class="sliderContainer">
									<div class="slider" >
										<div class="slides">
											<div class="sliderItem">
												<img class="img100" src="http://dummyimage.com/320x320/5AB176/fff">
											</div>
										</div>
										<div class="slides">
											<div class="sliderItem">
												<img class="img100" src="http://dummyimage.com/320x320/054E49/fff">
											</div>
										</div>
										<div class="slides">
											<div class="sliderItem">
												<img class="img100" src="http://dummyimage.com/320x320/FCDC5B/fff">
											</div>
										</div>
										<div class="slides">
											<div class="sliderItem">
												<img class="img100" src="http://dummyimage.com/320x320/B121CE/fff">
											</div>
										</div>
										<div class="slides">
											<div class="sliderItem">
												<img class="img100" src="http://dummyimage.com/320x320/6FB2C3/fff">
											</div>
										</div>
										<div class="slides">
											<div class="sliderItem">
												<img class="img100" src="http://dummyimage.com/320x320/C988E9/fff">
											</div>
										</div>
										<div class="slides">
											<div class="sliderItem">
												<img class="img100" src="http://dummyimage.com/320x320/621334/fff">
											</div>
										</div>
									</div>
								</div>
								<div class="sliderBulletContainer">
									<div class="sliderBullet"></div>
								</div>
							</div>
							
							<div class="sep"></div>
							
							<h2 class="aCenter">EXAMPLE - Slide with thumbnail and Fading</h2>
							
							<div class="sliderExample4 sliderWrapper">

								<a class="sliderBtnPrev icon-arrowLeft" href="#"></a>
								<a class="sliderBtnNext icon-arrowRight" href="#"></a>

								<div class="sliderContainer">
									<div class="slider" >
										<div class="slides">
											<img class="img100" src="http://dummyimage.com/600x400/1F768D/fff">
										</div>
										<div class="slides">
											<img class="img100" src="http://dummyimage.com/600x400/8F9660/fff">
										</div>
										<div class="slides">
											<img class="img100" src="http://dummyimage.com/600x400/D3C00D/fff">
										</div>
										<div class="slides">
											<img class="img100" src="http://dummyimage.com/600x400/25918E/fff">
										</div>
										<div class="slides">
											<img class="img100" src="http://dummyimage.com/600x400/EC4A5A/fff">
										</div>
										<div class="slides">
											<img class="img100" src="http://dummyimage.com/600x400/B0872E/fff">
										</div>
										<div class="slides">
											<img class="img100" src="http://dummyimage.com/600x400/9AAAB0/fff">
										</div>
										<div class="slides">
											<img class="img100" src="http://dummyimage.com/600x400/F6983E/fff">
										</div>
										<div class="slides">
											<img class="img100" src="http://dummyimage.com/600x400/F139A4/fff">
										</div>
										<div class="slides">
											<img class="img100" src="http://dummyimage.com/600x400/B07A06/fff">
										</div>
										<div class="slides">
											<img class="img100" src="http://dummyimage.com/600x400/B5B3B6/fff">
										</div>
										<div class="slides">
											<img class="img100" src="http://dummyimage.com/600x400/C0BA44/fff">
										</div>
										<div class="slides">
											<img class="img100" src="http://dummyimage.com/600x400/53CD7D/fff">
										</div>
									</div>
								</div>
								<div class="sliderThumbnail">
									<div class="sliderThumbnailContent">
										<div class="sliderThumbnailInner"></div>
									</div>
									<a class="sliderThumbnailPrev icon-arrowLeft" href="#"></a>
									<a class="sliderThumbnailNext icon-arrowRight" href="#"></a>
								</div>
							</div>
							
							<div class="sep"></div>
							
							<h2>OPTIONS</h2>
<pre>
gBannerSlider = new imgSlider( $('target'), {
	speed: 300,							//speed for transition
	drag: true,
	loop: true,
	autoHeight: false,
	autoPlay: false,
	autoPlaySpeed: 5000,				//speed for timeout
	fade: false,
	thumbnailCarousel: true,
	afterSlideCallback: function(){
										//callback when finish transition
	}
});
</pre>
							<div class="sep"></div>
						
							<h2>PUBLIC METHODS</h2>
<pre>
gBannerSlider.transition( 'next' , idx );
gBannerSlider.transition( 'prev' , idx );
gBannerSlider.changePattern( idx );
gBannerSlider.slidesOnReady();
gBannerSlider.destroy();
</pre>
							
						</div>
					</div>
					
					<?php include "include/footer.php" ?>
					<?php include "include/popup.php" ?>
					
				</div>
				
			</div>

		</div>
		
	</div>
	
	<!--JS-->
	<?php include "../include/common/include_js.html" ?>
	
	<script type="text/javascript">
		$(document).ready(init_fn);

		function init_fn() {
			
			common_init();
			
			gSliderExample1 = new imgSlider( $('.sliderExample1'), {
				autoPlay: true
			});
			
			gSliderExample2 = new imgSlider( $('.sliderExample2'), {
				autoPlay: false
			});
			
			gSliderExample3 = new imgSlider( $('.sliderExample3'), {
				autoPlay: false,
				loop: false
			});
			
			gSliderExample4 = new imgSlider( $('.sliderExample4'), {
				autoPlay: false,
				thumbnailCarousel: true,
				fade: true
			});
			
		}
	</script>
</body>

</html>
