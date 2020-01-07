@extends('frontend.layout')

@section('title', 'Tour Dates')

@section('content')

   <div class="row mt-2">
       <div class="col">
           {{--<h4 class="text-center">{{ $row->date->format('F') }} {{ $row->date->format('Y') }}</h4>--}}
           <div class="table-responsive mb-3">
               <table class="table">
                   {{--<thead class="thead-light">--}}
                   {{--<tr>--}}
                       {{--<th>Date</th>--}}
                       {{--<th>Venue</th>--}}
                       {{--<th>Location</th>--}}
                       {{--<th>Box Office</th>--}}
                       {{--<th>Tickets</th>--}}
                   {{--</tr>--}}
                   {{--</thead>--}}
                   <tbody>
                   @foreach ($dates as $d)
                       <tr>
                           <td>{{ $d->date->format('D') }} {{ $d->date->format('jS') }} {{ $d->date->format('M') }} {{ $d->date->format('Y') }}</td>
                           <td>{{ ucwords(strtolower($d->name)) }}</td>
                           <td>{{ ucwords(strtolower($d->venue)) }}</td>
                           @if($d->box_office)<td>{{ $d->box_office }}</td>@endif
                           <td><a href="{!! $d->ticket_url !!}" target="_blank" class="gold">Tickets</a></td>
                       </tr>
                   @endforeach
                   </tbody>
               </table>
           </div>
       </div>
   </div>



@endsection
