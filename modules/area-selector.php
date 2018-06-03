<form class="form-inline">
    <div class="form-group">
        <label class="sr-only" for="exampleInputAmount">I would like to eat....</label>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="exampleInputAmount" placeholder="My location is...." list="area">

            <datalist id="area">
  				<option value="Rajmahal">
  				<option value="Nayapalli">
  				<option value="Bapuji Nagar">
  				<option value="Ashok Nagar">
  				<option value="Saheed Nagar">
			</datalist> 
        </div>
    </div>
    <button onclick="location.href='restaurants.html'" type="button" class="btn theme-btn btn-lg">Search food</button>
</form>