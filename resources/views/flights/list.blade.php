@extends('layouts.app')

@section('content')
        <div class="container" >
            <h1 class="display-2">My flights</h1>
            <p class="lead">Here is a list of your filed flights and their PIREP status.</p>
            <p>You already did <b>3</b> flights with a total length of <b>3:30h</b>. You flew the most from <b>EDDM</b>.
            <table class="table">
            <thead class="table-dark">
                <tr>
                <th scope="col">PIREP ID</th>
                <th scope="col">Flight number</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Duration</th>
                <th scope="col">Last modified</th>
                <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">2634</th>
                <td>DLH281</td>
                <td>EDDF</td>
                <td>EDDM</td>
                <td>2023/08/15</td>
                <td>Accepted ✅</td>
                </tr>
                <tr>
                <th scope="row">6371</th>
                <td>DLH281</td>
                <td>EDDM</td>
                <td>EDDH</td>
                <td>2023/08/16</td>
                <td>Declined ⚠️</td>
                </tr>
                <tr>
                <th scope="row">7715</th>
                <td>DLH281</td>
                <td>EDDH</td>
                <td>LEPA</td>
                <td>2023/08/11</td>
                <td>Accepted ✅</td>
                </tr>
            </tbody>
            </table>

        </div>

@endsection
