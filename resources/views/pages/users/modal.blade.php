<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Requisition Form</h5>
        <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="row mb-3">
            <div class="col-md-12">
              <label for="name" class="col-md-6 col-form-label text-md-start">{{ __('Item Description') }}</label>
              <input id="Item" type="text" class="form-control @error('Item') is-invalid @enderror" name="Item" value="{{ old('name') }}" required autocomplete="name" autofocus>
              @error('Item')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-md-6">
              <label for="quantity" class="col-form-label">{{ __('Quantity') }}</label>
              <input id="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}" required onkeyup="calculateAmount()">
              @error('quantity')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="col-md-6">
              <label for="unit_price" class="col-form-label">{{ __('Unit Price') }}</label>
              <input id="unit_price" type="number" class="form-control @error('unit_price') is-invalid @enderror" name="unit_price" value="{{ old('unit_price') }}" required onkeyup="calculateAmount()">
              @error('unit_price')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-md-12">
              <label for="amount" class="col-form-label">{{ __('Amount') }}</label>
              <input id="amount" type="text" class="form-control" name="amount" readonly disabled>
            </div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

<script>
  function calculateAmount() {
    var quantity = document.getElementById('quantity').value;
    var unitPrice = document.getElementById('unit_price').value;
    var amountField = document.getElementById('amount');

    // Perform the calculation
    var amount = quantity * unitPrice;

    // Display the calculated amount in the amount field
    amountField.value = amount;
  }
</script>
