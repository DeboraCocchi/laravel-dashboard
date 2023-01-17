@extends('layout.main')

@section('content')
<div class="container">

    <table class="table ">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Date</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Debit</th>
            <th scope="col">Credit</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($cashflows as $cashflow)
            <tr>
              <td>{{$cashflow->id}}</td>
              <td>{{str_replace('-','/',$cashflow->transactionDate)}}</td>
              <td>{{$cashflow->description}}</td>
              <td>{{$cashflow->category}}</td>
              <td class="red">{{$cashflow->debit ? '-'.$cashflow->debit.',00' : '' }}</td>
              <td class="green">{{$cashflow->credit ? '+'.$cashflow->credit.',00' : '' }}</td>


            </tr>
              @endforeach

        </tbody>
    </table>
</div>
@endsection
