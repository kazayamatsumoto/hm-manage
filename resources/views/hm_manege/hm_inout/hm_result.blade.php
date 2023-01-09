@extends('layouts.app_top')

@section('content')

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>工数登録</title>
</head>

<body>
  <table class="user-table">
    @if(($result_comment) == 'hm_add_success')
    <tr>
      <td>工数登録完了しました</td>
    </tr>
    @elseif(($result_comment) == 'non')
    <tr>
      <td>工数登録失敗しました</td>
    </tr>
    @endif
      <td><a href="{{ route('add_top')}}">工数登録画面に戻る</a></td>
    </tr>
  </table>
</body>

</html>

@endsection