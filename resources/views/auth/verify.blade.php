@extends('layouts.app')

@section('content')
<div class="container my-5" style="min-height: 70vh;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Xác minh địa chỉ email của bạn</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Một liên kết xác minh mới đã được gửi đến địa chỉ email của bạn.
                        </div>
                    @endif

                    Trước khi tiếp tục, vui lòng kiểm tra email của bạn để lấy liên kết xác minh. Nếu bạn không nhận được email,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">bấm vào đây để yêu cầu khác</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
