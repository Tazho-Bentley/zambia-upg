<h1>this</h1>
{{var_dump($errors)}}
@if($errors->any())
        <ul>
            <li>
                @foreach($errors ->all() as $error)
                    {{ $error }}
                @endforeach
            </li>
        </ul>
@endif
@if(count($errors) > 0)
    <div>
        <h1>Here</h1>
        <section class="info-box fail">
            <ul>
                <li>
                    @foreach($errors ->all() as $error)
                        {{ $error }}
                    @endforeach
                </li>
            </ul>
        </section>
    </div>
@endif