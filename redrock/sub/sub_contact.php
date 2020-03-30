<?php include '../inc/header.php'; ?>
<div id="container" data-index="9">
	<div class="banner">
		<div class="content">
			<div class="inner">
				<div class="product_wrap">
					<div class="contact">
						<div class="tit">
							<span class="big">Contact <em>Let's establish a business with little capital</em></span>
						</div>
						<div class="contact_box">
							<form>
								<fieldset>
									<table border="1" width="100%;">
										<colgroup>
											<col style="width:15%;">
											<col style="width:85%;">
										</colgroup>
										<!-- tr*8/>((th>label)+td) -->
										<tr>
											<th><label for="title">제목</label></th>
											<td>
												<i></i>
												<input type="text" id="title">
											</td>
										</tr>
										<tr>
											<th><label for="name">이름</label></th>
											<td>
												<i></i>
												<input type="text" id="name">
											</td>
										</tr>
										<tr>
											<th><label for="contact">연락처</label></th>
											<td>
												<i></i>
												<input type="text" id="contact">
											</td>
										</tr>
										<tr>
											<th><label for="email">이메일</label></th>
											<td>
												<i></i>
												<input type="text" id="email">
											</td>
										</tr>
										<tr>
											<th><label for="counsel">상담유형</label></th>
											<td>
												<label class="counsel">
													<input type="radio" name="유형"><em>칭찬</em>
												</label>
												<label class="counsel">
													<input type="radio" name="유형"><em>불만</em>
												</label>
												<label class="counsel">
													<input type="radio" name="유형"><em>문의</em>
												</label>
												<label class="counsel">
													<input type="radio" name="유형"><em>제안</em>
												</label>
											</td>
										</tr>
										<tr>
											<th><label for="question">문의내용</label></th>
											<td><textarea id="question"></textarea></td>
										</tr>
									</table>
									<p>
										<input type="submit" value="작성완료">		
										<input type="submit" value="취소">	
									</p>
								</fieldset>
							</form>
						</div> <!-- /.contact_box -->
					</div> <!-- /.contact -->
				</div> <!-- /.product_wrap -->
			</div> <!-- /.inner -->
		</div> <!-- /.content -->
	</div> <!-- /.banner -->
</div> <!-- /#container -->
<?php include '../inc/footer_sub.php'; ?>