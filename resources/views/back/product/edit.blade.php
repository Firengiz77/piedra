<style>
    body {
        color: black;
    }

    #parent_id {
        width: 250px;
        display: flex;
        margin-bottom: 20px;
        margin-top: 20px;
        height: 45px;
        background: #F95F53;
        color: #ffffff;
        border-radius: 5px;
        border: none;
        font-size: 18px;

    }

    #parent_id_id {
        border-radius: 5px;
        background: white;
        color: rgb(70, 66, 66);
        opacity: 0.1;
    }

</style>

@php
$id = auth()
    ->guard('admin')
    ->id();
$admin = App\Models\User::find($id);

$catalog2 = App\Models\Catalog::get();
@endphp

@extends('back.layout.app')


@section('container')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> Edit Product </h4>
                            <form class="forms-sample" method="post"
                                action="{{ route('product.update', ['id' => $product->id]) }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="dropdown">
                                    <label for="catalog_id">Select Catalog:</button>
                                        <select name="catalog_id" id="parent_id">
                                            @foreach ($catalog2 as $cat)
                                                @if ($cat->parent_id !== null)
                                                    <option value=" {{ $cat->id }} " id="parent_id_id">
                                                        {{ $cat->name_az }}</option>
                                                @else
                                                    <option value="0" id="parent_id_id">0</option>
                                                @endif
                                            @endforeach
                                        </select>
                                </div>


                                <div class="form-group">
                                    <label for="name_az">Name (az)</label>
                                    <input type="text" name="name_az" class="form-control form-control-lg" id="name_az"
                                        value="{{ $product->name_az }}">
                                </div>
                                <div class="form-group">
                                    <label for="name_en">Name (en)</label>
                                    <input type="text" name="name_en" class="form-control form-control-lg" id="name_en"
                                        value="{{ $product->name_en }}">
                                </div>
                                <div class="form-group">
                                    <label for="name_ru">Name (ru)</label>
                                    <input type="text" name="name_ru" class="form-control form-control-lg" id="name_ru"
                                        value="{{ $product->name_ru }}">
                                </div>


                                <div class="form-group">
                                    <label for="details_az">Details (az)</label>
                                    <textarea name="details_az" id="details_az">{!! html_entity_decode($product->details_az) !!} </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="details_en">Details (en)</label>
                                    <textarea name="details_en" id="details_en">{!! html_entity_decode($product->details_en) !!} </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="details_ru">Details (ru)</label>
                                    <textarea name="details_ru" id="details_ru">{!! html_entity_decode($product->details_ru) !!} </textarea>
                                </div>


                                <div class="form-group">
                                    <label for="shipping_az">Shipping (az)</label>
                                    <textarea name="shipping_az" id="shipping_az">{!! html_entity_decode($product->shipping_az) !!} </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="shipping_en">Shipping (en)</label>
                                    <textarea name="shipping_en" id="shipping_en"> {!! html_entity_decode($product->shipping_en) !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="shipping_ru">Shipping (ru)</label>
                                    <textarea name="shipping_ru" id="shipping_ru"> {!! html_entity_decode($product->shipping_ru) !!}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" class="form-control form-control-lg" id="price"
                                        value="{{ $product->price }}">
                                </div>
                                <div class="form-group">
                                    <label for="discount">Discount</label>
                                    <input type="number" name="discount" class="form-control form-control-lg" id="discount"
                                        value="{{ $product->discount }}">
                                </div>
                                <div class="form-group">
                                    <label for="count">Count</label>
                                    <input type="number" name="count" class="form-control form-control-lg" id="count"
                                        value="{{ $product->count }}">
                                </div>

                                <div style="margin-bottom:20px;width:50px;height:auto">
                                    <label>Thumbnail</label>
                                    <img class="card-img-top"
                                        src="{{ !empty($product->thumbnail) ? url('upload/product_images/' . $product->thumbnail) : url('upload/product_images/icon-admin.png') }}"
                                        width="50px" height="50px">
                                </div>


                                <div class="form-group">
                                    <label for="thumbnail">Thumbnail</label>
                                    <input type="file" name="thumbnail" class="form-control" id="thumbnail">
                                </div>

                                <div style="margin-bottom:20px;width:50px;height:auto">
                                    <label>Images</label>
                                    <div style="display:flex">

                                        @foreach (json_decode($product->images) as $image)
                                            <img src="{{ !empty($image) ? url('upload/product_images/' . $image) : url('upload/product_images/icon-admin.png') }}"
                                                alt="" width="120px" height="120px" style="margin:20px">
                                        @endforeach
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="images">Images</label>
                                    <input type="file" name="images[]" class="form-control" id="images" multiple>
                                </div>


                                <button type="submit" class="btn btn-primary me-2">Submit</button>

                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#details_az'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#details_en'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#details_ru'))
            .catch(error => {
                console.error(error);
            });



        ClassicEditor
            .create(document.querySelector('#shipping_az'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#shipping_en'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#shipping_ru'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
