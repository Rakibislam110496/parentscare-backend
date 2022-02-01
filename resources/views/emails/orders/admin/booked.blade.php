@component('mail::message')
# Order booking

**{{$data["User Name"]}}** has {{$data["Payment Status"] == "Paid" ? "completed payment" : "submitted request"}} for **{{$data["Service Name"]}}** service.


@component('mail::table')
    | Property      | Values            |
    | :------------ | :---------------- |
    @foreach($data as $key => $value)
    | {{$key}}     | {{$value}}     |
    @endforeach

@endcomponent

@endcomponent
