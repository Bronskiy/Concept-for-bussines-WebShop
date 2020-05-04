@extends('layouts.default' , ['bodyClass' => 'companies'])

@section('meta_title', 'Companies')
@section('meta_description', '')
@section('meta_keywords', '')

@section('stylesheet')

@endsection

@section('content')
<div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>#</th>
                <th>ArtID</th>
                <th>Name</th>
                <th>Preis</th>
                <th>Order</th>
              </tr>
            </thead>
            <tbody>
              <?php $a=0; while ($a <= 10) { ?>
                <tr>
                  <td><?php echo $a; ?></td>
                  <td><a href="/product/3">A1234</a></td>
                  <td><a href="/product/2">Part Name</a></td>
                  <td>$123</td>
                  <td>
                    <button type="button" class="btn btn-primary btn-sm">Order</button>
                  </td>
                </tr>
                <?php $a++; } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection

  @section('javascript')

  @stop
