<form action="{{route('sendSms')}}" method="POST">
    @csrf
    <label for="mobile_number">Mobile Number:</label> <br>
    <input type="text" name="mobile_number" id="mobile_number"> <br>
    <label for="message">Message:</label> <br>
    <input type="text" name="message" id="message"> <br>
    <input type="submit" name="submit">
</form>