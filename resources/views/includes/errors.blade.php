 @if($errors->any())

                    <div class="alert aleart-danger">
                        @foreach($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>

                    @endif