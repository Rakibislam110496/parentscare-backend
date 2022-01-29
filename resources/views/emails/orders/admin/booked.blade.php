@component('mail::message')
# Order booking

**{{$username}}** has {{$paymentStatus ? "completed payment" : "submitted request"}} for **{{$serviceName}}** service.


@component('mail::table')
    | Property      | Values            |
    | :------------ | :---------------- |
    | User Name     | {{$username}}     |
    | Service Name  | {{$serviceName}}  |
    | Patient Name  | {{$patientName}}  |
    | Phone         | {{$phone}}        |
    | Amount        | {{$amount}}       |
    | Sickness      | {{$sickness}}     |
    | Address       | {{$address}}      |
    | Expected Date | {{$expectedDate}} |
    | Payment Status | {{$paymentStatus ? "Paid" : "Not Paid"}} |

@endcomponent

@endcomponent
