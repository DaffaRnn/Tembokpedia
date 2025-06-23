<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    <section class="container-fluid">
        <div class="program-st py-5 mx-3 rounded-4 shadow">

            <div class="text-center mb-4">
                <h1>Daftar Program</h1>
                <h3>{{ $program->title }}</h3>
            </div>

            <div class="row justify-content-center mx-5">

                <div class="col mx-auto px-5 mb-3">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </section>    

</x-layout>