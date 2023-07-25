<x-app-layout>
    @if (Auth::user()->role != 2)
    @dd("Please Login");
    @endif
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           
            
        </h2>
    </x-slot>

    <div class="py-12 bg-success">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 ">
                      <nav class="navbar navbar-expand-lg bg-body-tertiary ">
                        <div class="container-fluid">
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse bg-secondary" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Appointment</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Report</a>
                              </li>                             
                            </ul>
                            <form class="d-flex" role="search">
                              <input class="form-control me-2" type="search" placeholder="Search with Doctor's name" aria-label="Search">
                              <button class="btn btn-outline-dark bg-success " type="submit">Search</button>
                            </form>
                          </div>
                        </div>
                      </nav>


                </div>
            </div>
        </div>

    </div>
<div class="bg-primary">
    {{ __('Patient\'s Admin (Doctors Names List)') }}
</div>

<div>
    <table class="table table-hover table-danger table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Fees</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>400/-</td>
            <td>Date</td>
            <td>
                <a class="btn btn-primary" href="#" role="button">Book</a>
            </td>
          </tr>
        </tbody>
      </table>
</div>

    
</x-app-layout>
