<form action="/api/agencies/{{$agency->agency_id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type='text' name='name' placeholder='Név'>
    <input type='text' name='country' placeholder='Hely'>
    <select name='agency_id' placeholder='AgencyID'>
        @foreach ($users as $user)
            <option value="${$users->id}" {{$users ->id == }}>








</form>