<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus eius architecto voluptatum animi a tempore, doloremque facilis, nostrum voluptas dolores placeat quam sint consequatur itaque! Corporis hic aperiam tempora exercitationem quaerat perspiciatis, nesciunt quasi perferendis eius qui esse molestiae omnis consequatur quisquam ea illum inventore, fugiat repellat nihil error? Mollitia praesentium ipsa quos eveniet iste! Temporibus ratione facilis, aliquid nesciunt atque exercitationem vero consequuntur beatae distinctio rem quaerat sed dolorum blanditiis excepturi nihil modi nostrum iste in? Eum sit excepturi saepe neque. Eos commodi iure totam impedit quod officia deserunt sit nisi quis maxime, officiis temporibus? Consequatur dignissimos illo sapiente adipisci quod sint odio dolore, laborum odit repellendus distinctio quas necessitatibus in cum quasi neque officia? Dolorum, deserunt commodi quibusdam hic nihil delectus reprehenderit magnam beatae nam temporibus ex id nesciunt, suscipit rerum dicta sapiente possimus qui sint omnis corrupti quas. Nam nulla error nostrum ratione id illum aliquam accusamus, culpa molestias quae nobis dolorum suscipit fugit quos aspernatur consectetur vel est saepe ipsa reiciendis nihil aut. Nemo itaque dicta, magnam, veniam a exercitationem placeat cum perferendis tenetur repellendus quasi? Necessitatibus dignissimos minus dolorum, distinctio ratione ad voluptas earum voluptatem magnam corporis cupiditate nisi nostrum molestiae animi maxime debitis nulla aliquid laboriosam doloremque ducimus. Asperiores, pariatur vero. Quis minima ipsum consectetur accusantium ratione assumenda dicta molestiae veritatis, officiis voluptatibus ullam laudantium maiores nisi nostrum iure exercitationem amet unde magni, voluptatem earum possimus voluptatum cumque, consequuntur accusamus. Placeat neque quibusdam obcaecati deserunt. Nam, deleniti! Quod eligendi eos voluptate perspiciatis eveniet nulla sed placeat neque laudantium, a animi voluptatibus laboriosam illo mollitia recusandae maxime tenetur soluta magni dolorem sunt sint quam labore voluptas. Eum neque blanditiis mollitia, voluptates voluptatibus vero corrupti, quisquam accusamus ut a sequi excepturi iure doloremque fugiat perferendis asperiores reprehenderit recusandae tempora nemo harum maxime sunt quis eligendi. Aut sequi eum nesciunt ducimus voluptatem rerum. Dignissimos nulla vero blanditiis quo aperiam voluptatem, possimus odio exercitationem odit! Consectetur porro, a eos repudiandae illum doloribus ipsa voluptates corrupti laboriosam quia ratione corporis quam, nesciunt neque asperiores iusto. Aspernatur dolorum iste, vitae quidem error nesciunt culpa ipsum ratione aliquam ut facere maxime corrupti sapiente dolorem praesentium quisquam dolore doloribus! Ipsum nostrum atque at voluptatibus soluta sunt obcaecati. Iusto eligendi neque amet eius facilis nostrum harum deserunt hic labore omnis corporis eaque minima, aliquam voluptate, ad velit quasi, sit explicabo ullam commodi. Tenetur debitis corrupti autem enim nulla odit saepe dicta, ab aspernatur.</div>
                        <div class="card card-default">
                            <div class="card-header">Add User</div>
                            <div class="card-body">

                                @if (session('success_message'))
                                <div class="alert alert-success">
                                    {{ session('success_message') }}
                                </div>
                                @endif

                                @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <form method="POST" action="{{ route('store') }}" id="userForm" class="mb-4">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                        <div class="col-md-6">
                                            <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, esse molestiae a consequuntur nobis ullam! Facere quis repudiandae, pariatur aut dolorum modi nisi nam, doloribus veniam deserunt nulla eaque libero vitae eveniet porro repellendus delectus minus labore praesentium quo dolorem aliquam architecto! Pariatur sit hic delectus impedit sint quam ut reprehenderit expedita, quia unde quae repudiandae quod architecto magni nobis dicta ducimus sequi minima! Laudantium officiis quo optio sapiente dolor, amet sint sed harum laborum repellat ut dolores ad est libero vitae nulla, aperiam itaque et qui quibusdam earum eaque! Saepe quae omnis porro eius assumenda nulla quia voluptatem esse fugit cumque ullam veniam, architecto dolorum, magnam, eligendi ex. Eligendi dicta hic esse, modi rem beatae ratione delectus maiores minima nisi ipsa neque labore error odit eius saepe! Dolor labore expedita ipsum? Minus tempora incidunt magni ex aliquid inventore vero rerum est velit molestiae dolores quam officia harum, repellat in reprehenderit voluptas et omnis, illo veniam? Cum dignissimos id aliquam est maxime culpa, dicta neque architecto, quia illum odio ullam rem eos totam et inventore. Accusamus debitis eaque praesentium. Tempore adipisci, neque veniam amet labore distinctio magni autem tempora eius similique ea modi, consequuntur corporis repudiandae ullam pariatur! Dolorum iusto eaque debitis. Accusamus sequi repellat aliquid eius doloribus at debitis obcaecati, magnam molestiae eveniet tempora voluptatum iusto, quasi, temporibus quas impedit. Mollitia accusamus magni accusantium vero voluptatum quo provident! Similique veritatis deserunt, sed, temporibus laboriosam laborum dolorum ipsum quam modi assumenda totam adipisci, a atque itaque ab magni. Porro, nobis nam id magni, ut soluta excepturi tempore culpa neque ad incidunt veritatis obcaecati sit atque eveniet deleniti explicabo labore et. Corrupti dolores quod animi sunt excepturi rerum necessitatibus tenetur quis ut similique. Sequi explicabo provident ut? Dicta, fuga dolores ipsa incidunt illum sunt! Cupiditate, explicabo enim. Aut voluptatum quisquam aperiam error est ut eligendi aliquid dolor laboriosam. Aliquam id at ea explicabo assumenda molestias atque iusto qui consequuntur, eveniet sapiente nostrum? Perspiciatis, iusto autem eos quasi doloribus, voluptas aut accusantium expedita repellat assumenda dolores minima consequatur explicabo commodi dignissimos hic fuga magnam repellendus necessitatibus eligendi recusandae facere optio voluptate! Nemo ratione quia ad saepe necessitatibus obcaecati nihil et, animi iure excepturi soluta reprehenderit earum amet reiciendis, minus debitis sint, odio voluptatum officiis! Labore distinctio quam nihil facere et sapiente, quisquam ex velit exercitationem ab iusto quia sed sequi commodi temporibus quod fuga perspiciatis quis laboriosam. Rerum ducimus accusamus voluptatem necessitatibus voluptate veritatis id, nesciunt eveniet laudantium totam temporibus ad porro facilis. Debitis sit reprehenderit vel voluptas numquam deserunt. Delectus, vel? Dignissimos optio, placeat aliquam sunt, illo assumenda, reiciendis itaque quia numquam ab beatae deserunt expedita obcaecati magnam aut enim neque corporis quod. Consequatur molestiae tempora cumque illum ducimus dolore sapiente mollitia dignissimos enim voluptate. Animi molestiae aperiam, labore eius illum hic similique iure odio ut necessitatibus voluptatum porro exercitationem ab praesentium repellat ad sunt quas mollitia deleniti eveniet fuga quam obcaecati nisi laboriosam? Similique iure aut consequatur doloribus molestias ducimus mollitia ad fugit consequuntur qui. Aspernatur architecto voluptatibus tenetur officiis.
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Add User
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        (function() {
            document.querySelector('#userForm').addEventListener('submit', function (e) {
                e.preventDefault()

                axios.post(this.action, {
                    'name': document.querySelector('#name').value,
                    'email': document.querySelector('#email').value,
                    'password': document.querySelector('#password').value,
                    'password_confirmation': document.querySelector('#password-confirm').value
                })
                .then((response) => {
                    // window.location.href = '{{ route('create') }}'
                    this.reset()
                    this.insertAdjacentHTML('afterend', '<div class="alert alert-success" id="success">User created successfully!</div>')
                    document.getElementById('success').scrollIntoView()
                })
                .catch((error) => {
                    const errors = error.response.data.errors
                    const firstItem = Object.keys(errors)[0]
                    const firstItemDOM = document.getElementById(firstItem)
                    const firstErrorMessage = errors[firstItem][0]

                    // scroll to the error message
                    firstItemDOM.scrollIntoView()

                    // remove all error messages
                    const errorMessages = document.querySelectorAll('.text-danger')
                    errorMessages.forEach((element) => element.textContent = '')

                    // show the error message
                    firstItemDOM.insertAdjacentHTML('afterend', `<div class="text-danger">${firstErrorMessage}</div>`)

                    // remove all form controls with highlighted error text box
                    const formControls = document.querySelectorAll('.form-control')
                    formControls.forEach((element) => element.classList.remove('border', 'border-danger'))

                    // highlight the form control with the error
                    firstItemDOM.classList.add('border', 'border-danger')
                });
            });

        })();
    </script>

</body>
</html>
