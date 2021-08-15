@extends('layouts.app')

@section('extra-styles')
<style>
    td, th, tr {
        vertical-align: middle !important;
        text-align: center !important;
    }

</style>
@endsection

@section('content')


<div class="container-fluid">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
        </tbody>
</div>


</table>



@endsection

