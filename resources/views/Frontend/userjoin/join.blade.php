@extends('layout.master')
@section('kuchb')

<div class="container my-5 ">
    <div class="row align-items-center">
        <div class="col-4 justify-content-between align-items-center">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Join as a client or Photographer</h2>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <span class="user-type-label" data-value="client">I’m a client</span>
                                    <input type="radio" name="userType" value="client">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <span class="user-type-label" data-value="photographer">I’m a photographer, looking for work</span>
                                    <input type="radio" name="userType" value="photographer">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" id="joinButton"  class="btn btn-danger"> Join</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const joinButton = document.getElementById('joinButton');
    const userTypeLabels = document.querySelectorAll('.user-type-label');

    userTypeLabels.forEach(label => {
        label.addEventListener('click', function() {
            const associatedRadio = label.nextElementSibling;
            associatedRadio.checked = true;
            updateJoinButtonText(associatedRadio.value);
        });
    });

    function updateJoinButtonText(userType) {
        if (userType === 'client') {
            joinButton.textContent = 'Join as a client';
            // Redirect to the client page
            window.location.href = "{{ route('client') }}";
        } else if (userType === 'photographer') {
            joinButton.textContent = 'Join as a photographer';
            window.location.href = "{{ route('company') }}";
            // Redirect to the photographer page if needed
            // window.location.href = "{{ route('photographer') }}";
        }
    }

    // Initialize the button text based on the initially checked radio button
    const initiallyCheckedRadio = document.querySelector('input[name="userType"]:checked');
    if (initiallyCheckedRadio) {
        updateJoinButtonText(initiallyCheckedRadio.value);
    }
</script>
@endsection
