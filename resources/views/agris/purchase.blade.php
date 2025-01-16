@extends('layouts.app')

@section('content')

<div class="row">
    
    <div class="col-12">
        
        <h1 class="text-center font-a mb-3">購入詳細</h1>
        
        <form method="POST" action="{{ route('purchaseConfirm') }}">
            @csrf
            
            <div class="form-group row mt-2">
                <label class="col-md-3 col-form-label text-md-right">メールアドレス</label>
                
                <div class="col-md-9">
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
            </div>
            
            <div class="form-group row mt-2">
                <label class="col-md-3 col-form-label text-md-right">商品名</label>

                <div class="col-md-9">
                    <input type="text" class="form-control @error('goods') is-invalid @enderror" name="goods" value="{{ $agri->name}}">
                    
                    @error('goods')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
 
            <div class="form-group row mt-2">
                <label for="contact" class="col-md-3 col-form-label text-md-right">値段</label>
                
                <div class="col-md-9">
                    <input type="text" id="sum-price" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $agri->price}}">
                    
                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <div class="form-group row mt-2">
                <label for="contact" class="col-md-3 col-form-label text-md-right">個数</label>
                
                <div class="col-md-9">
            
                    <select id="quantity" name="quantity" class="form-select form-control" aria-label=".form-select-sm example">
                        <option selected>選んでください</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>

                </div>
            </div>
            
            
            <div class="form-group row mt-2">
                <label for="contact" class="col-md-3 col-form-label text-md-right">備考：任意</label>
                <div class="col-md-9">
                    <textarea id="contact" class="form-control" name="contact" cols="30" rows="10"></textarea>
                </div>
            </div>
            
            <div class="col-12 form-group row mt-2">
                <input type="hidden" id="sum_value" class="form-control" name="sumprice" value="">
            </div>

            
            <div class="form-group row mt-3 mb-0">
                <div class="col-md-9">
                    <button type="submit" class="btn btn-primary">
                        お問い合わせ内容の確認へ
                    </button>
                </div>
                <div class="col-md-3 mt-3">
                    <h2 id="sum_text" name="sumprice">合計金額：</h2>
                </div>
            </div>
            
        </form>
    </div>
    
    
</div>

<script>
    $("#sum-price").each(function() {
        console.log($(this).val());
    });
    
    $("#quantity").on("change", function() {
        console.log($(this).val());
    });
    
    $(function() {
    // selectの変更があった場合
        $("#quantity").on("change", function() {
            // 選択された個数を取得
            var quantity = parseInt($(this).val(), 10); // 数値に変換
    
            // 商品の価格を取得
            var price = parseInt($("#sum-price").val(), 10);
            
            // 合計金額を計算
            var sum = quantity * price;
    
            // id="sum_text"に合計金額を表示
            if (!isNaN(sum)) {
                $("#sum_text").text("合計金額：" + sum + "円");
                $("#sum_value").val(sum);
            } else {
                $("#sum_text").text("合計金額：");
            }
        });
    });
    
    
</script>

@endsection