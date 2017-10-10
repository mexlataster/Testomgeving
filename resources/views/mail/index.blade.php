<!-- index.blade.php -->

<link rel="stylesheet" href="{{ asset('css/app.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container">
  <br>
    <div class="content">
        <h1>Inbox</h1>
    </div>

  <div class="container">
    <table class="table table-hover">
    <thead>
      <tr>
        <th><a href="mail/create" class="btn btn-info btn-lg">Mail Maken</a></th>
        <th>Afzender</th>
        <th>Onderwerp</th>
        <th>Bericht</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cruds as $post)
      <tr>
        <td></td>
        <td>{{$post['user']}}</td>
        <td>{{$post['onderwerp']}}</td>
        <td><a href="{{action('MailController@edit', $post['id'])}}" class="btn btn-info btn-lg">Lezen</a></td>
        <td>
          <form action="{{action('MailController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger btn-lg" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
