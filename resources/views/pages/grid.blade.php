@extends('layouts.app')

@section('content')

<div class="main">

    <div class="calculator-container">
        <div id="Maintenance-Container">
            <h1>Maintenance</h1>

            <div class="input-container" id="box1">
                <label for="Height">Height</label>
                <input id="Height" type="number" class="form-control level-input" min="1" max="299" step="1" />
            </div>
            <div class="input-container" id="box2">
                <label for="Weight">Weight</label>
                <input id="Weight" type="number" class="form-control level-input" min="1" max="999" step="0.5" />
            </div>
            <div class="input-container" id="box3">
                <label for="Age">Age</label>
                <input id="Age" type="number" class="form-control level-input" min="1" max="199" step="1" />
            </div>

            <div class="input-container" id="box4">
                <form>
                    <input type="radio" name="gender" value="male"> Male<br>
                    <input type="radio" name="gender" value="female"> Female<br>
                </form>
            </div>

            <div id="warning-container">

            </div>

            <div class="output-container">
                <label for="Result">Result</label>
                <input id="Result" type="text" readonly class="form-control" />
            </div>

            <div class="input-container">
                <button class="btn btn-dark" id="button-calculate" onclick="test()">Calculate</button>
            </div>
        </div>

        <div id="PAL-Container">
            <h1>PAL Calculator</h1>

            <div class="input-container">
                <label for="Excercise">Excercise</label>
                <input id="Excercise" type="text" class="form-control level-input" />
                <input id="Excercise-Time" type="number" class="form-control time" />
            </div>

            <div id="warning-container">

            </div>

            <div class="output-container">
                <label for="Result">Result</label>
                <input id="Result" type="text" readonly class="form-control" />
            </div>

            <div class="input-container">
                <button class="btn btn-dark" id="button-calculate" onclick="test()">Calculate</button>
            </div>
        </div>
    </div>
</div>




@endsection

<script src="js/scripts/calories.js" type="text/javascript"></script>
