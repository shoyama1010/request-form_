<!-- <!-＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊管理画面ページ(admin)＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊ --> -->


@extends('layouts.default')
<style>
	th {
		background-color: #8b4513;
		color: white;
		padding: 5px 40px;
	}

	tr:nth-child(odd) td {
		background-color: #FFFFFF;
	}

	td {
		padding: 25px 40px;
		background-color: #EEEEEE;
		text-align: center;
	}

	svg.w-5.h-5 {
		/*paginateメソッドの矢印の大きさ調整のために追加*/
		width: 30px;
		height: 30px;
	}

	header ul {
		display: flex;
		justify-content: space-between;
		padding: 0px;
		list-style-type: none;
		line-height: 60px;
		padding-left: 47px;
		padding-right: 100px;
	}

	li {
		padding: 20px;
	}


	table {
		justify-content: center;
		display: flex;
	}
</style>
@section('title', 'admin.blade.php')
<!-- <header>
	<ul>
		<li>名前やメール入力</li>
		<li>性別</li>
		<li>お問い合わせの種類</li>
		<li>年/月/日</li>
		<li>検索</li>
		<li>リセット</li>
	</ul>
</header> -->
@section('content')

<header>
	<ul>
		<li>名前やメール入力</li>
		<li>性別</li>
		<li>お問い合わせの種類</li>
		<li>年/月/日</li>
		<li>検索</li>
		<li>リセット</li>
	</ul>
</header>

<table>
	<tr>
		<!-- <th>id</th> -->
		<th>性別</th>
		<th>名前</th>
		<th>メールアドレス</th>
		<th>問い合わせの種類</th>
		<!-- <th>Data</th> -->
	</tr>

	@foreach ($authors as $author)
	<tr>
		<td>{{$author->gender}}</td>
		<td>{{$author->name}}</td>
		<td>{{$author->age}}</td>
		<td>{{$author->nationality}}</td>
		<!-- <td>{{$author->getDetail()}}</td> -->
	</tr>
	@endforeach
</table>
{{ $authors->links() }}
@endsection