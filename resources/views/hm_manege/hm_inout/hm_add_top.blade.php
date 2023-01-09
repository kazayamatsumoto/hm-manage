@extends('layouts.app_top')

@section('content')

<form name="input_form" method="post" action="{{ route('add_do') }}">
  @csrf
  <table>
    <tr>
      <th></th>
    </tr>
    <tr>
      <td></td>
      <td>プロジェクト</td>
      <td>作業項目</td>
      <td>工数(時間)</td>
      <td>作業内容</td>
    </tr>
    <tr>
      @for($i = 1; $i < 11; $i++) <td>{{$i}}</td>
        <td><select name="project">
            @foreach($data_list as $data)
            <option>{{ $data['project']}}</option>
            @endforeach
          </select>
        </td>
        <td><select name="work{{$i}}">
            @foreach($data_list as $data)
            <option>{{$data['work']}}</option>
            @endforeach
          </select>
        </td>
        <td>
          <textarea name="work_time{{$i}}" rows="1" cols="5"></textarea>
        </td>
        <td>
          <textarea name="work_info{{$i}}" rows="1" cols="100"></textarea>
        </td>
    </tr>
    @endfor
  </table>
  <input type="submit" value="登録">

</form>
@endsection