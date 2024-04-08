<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Contact Form</title>
	<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
	<header class="header">
		<div class="header__inner">
			<a class="header__logo" href="/">
				FashionablyLate
			</a>
		</div>
	</header>

	<main>
		<div class="contact-form__content">
			<div class="contact-form__heading">
				<h2>Contact</h2>
			</div>
			<form class="form" action="/contacts/confirm" method="post">
				@csrf

				<!-- *********名前********** -->
				<div class="form__group">
					<div class="form__group-title">
						<span class="form__label--item">お名前</span>
						<span class="form__label--required">必須</span>
					</div>
					<div class="form__group-content">
						<div class="form__input--text">
							<input type="text" name="name" placeholder="山田太郎" value="{{ old('name') }}" />
						</div>
						<div class="form__error">
							<!--バリデーション機能を実装したら記述します。-->
							@error('name')
							{{ $message }}
							@enderror
						</div>
					</div>
				</div>

				<!-- ***************性別(gender)************* -->
				<div class="form_group ">
					<div class="form__group-title">
						<span class="form__label--item">性別</span>
						<span class="form__label--required">必須</span>
					</div>
					<div class="form__group-content">
						<div>
							<input type="radio" name="gender" value="male">男性
							<input type="radio" name="gender" value="female">女性
						</div>
					</div>
				</div>

				<!-- *****************メール***************** -->
				<div class="form__group">
					<div class="form__group-title">
						<span class="form__label--item">メールアドレス</span>
						<span class="form__label--required">必須</span>
					</div>
					<div class="form__group-content">
						<div class="form__input--text">
							<input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
						</div>
						<div class="form__error">
							<!--バリデーション機能を実装したら記述します。-->
						</div>
					</div>
				</div>

				<!-- *******************住所******************** -->
				<div class="form__group">
					<div class="form__group-title">
						<span class="form__label--item">住所</span>
						<span class="form__label--required">必須</span>
					</div>
					<div class="form__group-content">
						<div class="form__input--text">
							<input type="text" name="address" placeholder="例 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
						</div>
						<div class="form__error">
							<!--バリデーション機能を実装したら記述します。-->
						</div>
					</div>
				</div>


				<div class="form__group">
					<div class="form__group-title">
						<span class="form__label--item">建物</span>
						<!-- <span class="form__label--required">必須</span> -->
					</div>

					<div class="form__group-content">
						<div class="form__input--text">
							<input type="text" name="name" placeholder="例 千駄ヶ谷マンション101" />
						</div>
						<div class="form__error">
							<!--バリデーション機能を実装したら記述します。-->
						</div>
					</div>
				</div>

				<div class="form__group">
					<div class="form__group-title">
						<span class="form__label--item">電話番号</span>
						<span class="form__label--required">必須</span>
					</div>
					<div class="form__group-content">
						<div class="form__input--text">
							<input type="tel" name="tel" placeholder="09012345678" value="{{ old('tel')}}" />
						</div>
						<div class="form__error">
							<!--バリデーション機能を実装したら記述します。-->
						</div>
					</div>
				</div>


				<div class="form__group-title">
					<dt><label for="type">お問い合わせ種別</label></dt>
				</div>
				<div class="form__group-content">
					<dd>
						<select id="type" name="type">
							<option value="商品のお届けについて">商品のお届けについて</option>
							<option value="商品の交換">商品の交換</option>
							<option value="商品トラベル">商品トラベル</option>
							<option value="ショップのお問い合わせ">ショップのお問い合わせ</option>
							<option value="その他">その他</option>
						</select>
					</dd>
				</div>

				<div class="form__group">
					<div class="form__group-title">
						<span class="form__label--item">お問い合わせ内容</span>
					</div>

					<div class="form__group-content">
						<div class="form__input--textarea">
							<textarea name="content" placeholder="資料をいただきたいです"></textarea>
						</div>
					</div>
				</div>
				<div class="form__button">
					<button class="form__button-submit" type="submit">確認画面</button>
				</div>
			</form>
		</div>
	</main>
</body>

</html>