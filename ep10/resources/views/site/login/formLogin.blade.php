@extends('site.master.home')
@section('content')
    <div>
        <p>Login</p>
        <div class="alert alert-danger d-none menssageBox" role="alert">
        </div>
        <form id="formLogin">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Login:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email...">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha:</label>
                <input class="form-control" type="password" id="password" name ='password'>
            </div>
            <input class="btn btn-primary" type="submit" value="Logar">
        </form>
    </div>
@endsection

@section('script')
<script>
    $(function(){
        $('#formLogin').submit(function(event){
            event.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                url: "{{route('login.store')}}",
                type: 'post',
                data: data,
                dataType: 'json',
                success: function(response){
                    if(response.sucesso){
                        window.location.href="{{route('dashboard')}}";
                    }else{
                        $('.menssageBox').removeClass('d-none').html(response.mensagem);
                    }
                }
            });
        })
    })
</script>
@endsection
