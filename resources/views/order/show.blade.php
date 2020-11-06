@extends('layouts.backendtemplate')

@section('content')

  <main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-tasks"></i> Order Detail Page</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Order Detail</a></li>
        </ul>
      </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h2 class="d-inline-block">Order Detail</h2>
          <div>
          <a href="{{route('order.index')}}" class="btn btn-outline-primary"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Go Back</a>
          </div>
          {{-- order detai start --}}
            <div class="container mt-3">
                <div class="row mt-5 shoppingcart_div">
                    <div>
                    <h4 class="text-dark"><small class="text-muted">Orderd by</small> {{$order->user->name }}</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th colspan="2"> Product </th>
                                <th> Qty </th>
                                <th> Price </th>
                                <th> SubTotal </th>
                            </tr>
                            </thead>
                            {{-- table body --}}
                            <tbody id="shoppingcart_table">
                                {{-- @php
                                    dd($order->items)
                                @endphp --}}
                                @foreach($order->items as $ordItem)
                                <tr>
                                    <td>
                                        <img src="{{$ordItem->photo}}" class="cartImg" width="150" height="150" style="object-fit:cover;">
                                    </td>
                                    <td>
                                        <div class="mt-5">
                                            <p class="text-dark">Item Name : <span class="text-muted"> {{$ordItem->name}}</span></p>
                                            <p class="text-dark">Item Code : <span class="text-muted"> {{$ordItem->codeno}}</span></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mt-5">
                                            <p class="text-dark">{{$ordItem->pivot->qty}}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mt-5">
                                            <p class="text-dark">
                                            <small>Discount :</small>
                                            <span class="text-muted font-weight-bold">{{$ordItem->discount}} mmk</span>
                                        </p>
                                        <p class="font-weight-lighter text-dark">
                                            <small>Price :</small>
                                            <span class="text-muted font-weight-bold">{{$ordItem->price}} mmk</span>
                                        </p>
                                        </div>
                                    </td>
                                    <td class="text-dark">
                                       <div class="mt-5">
                                            <span class="text-dark font-weight-bold"> 
                                                @php
                                                $total = 0;
                                                $subTotal = 0;
                                                    if($ordItem->discount != 0 || $ordItem->discount != '')
                                                    {
                                                        $subTotal += $ordItem->discount * $ordItem->pivot->qty;
                                                    }
                                                    else {
                                                        $subTotal += $ordItem->price * $ordItem->pivot->qty;
                                                    }
                                                    $total += $subTotal;
                                                echo $subTotal;
                                                @endphp
                                                mmk</span>
                                       </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4">
                                        <h3 class="text-right text-primary"> Total : {{$order->total_amount}} mmk</h3>
                                    </td>
                                   @if($order->status == 0)
                                    <td colspan="2">
                                        <a href="{{url('order/'.$order->id.'/confirm')}}" class="btn btn-block btn-outline-success" onclick="return confirm('Are you sure ?')">Confirm Order</a>
                                    </td>
                                   @endif
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                </div>

            </div>
        </div>
      </div>
    </div>
  </main>
@endsection
