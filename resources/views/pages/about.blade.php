@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">About Us</div>

                <div class="panel-body">
                    This is a static about us page.<br />
                    <hr />

                    <h4>What exactly are we doing?</h4>
                    <p>What we are going to do is set up a page called &quot;<em>Example</em>&quot;</p>
                    <p>We will need to add the route, create the controller and finally create a view.</p>
                    <p>Below is a step-by-step guide to creating your own.</p>
                    <hr />

                    <h4>Step 1:</h4>
                    <p>Add the route to the routes file &quot;<em>app/Http/route.php</em>&quot;:</p>
                    <code>
                        Route('/example', 'PagesController&#64;example');
                    </code>

                    <h4>Step 2:</h4>
                    <p>As I have created the controller we will not need to create the controller.</p>
                    <p>However we will need to add the function that our router is pointing to.</p>
                    <p>In our router we defined &quot;<em>PagesController&#64;example</em>&quot;.</p>
                    <p>So we need to open &quot;<em>app/Http/Controllers/PagesController.php</em>&quot; and add this following bit of code.</p>
                    <code>
                        public function example()<br />
                        {   <br />
                        &nbsp;&nbsp;&nbsp;&nbsp;return view('pages.example');<br />
                        }
                    </code>

                    <h4>Step 3:</h4>
                    <p>In this final step we are going to add a view.</p>
                    <p>So we are going to need to create a new file called &quot;<em>example.blade.php</em>&quot; in the &quot;<em>resources/views/pages</em>&quot; directory.</p>
                    <p>Then finally copy and paste this last little bit of code.</p>

                    <code>
                        &#64;extends('layouts.master')<br />
                        <br />
                        &#64;section('content')<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="panel panel-default"><br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="panel-heading">Our Example Page&lt;/div><br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="panel-body"><br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our content.<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div><br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div><br />
                        &#64;endsection
                    </code>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
