<div class="well">
    <div class="container">
        <h1>SimCCS Gateway</h1>
        <p>
            SimCCS is a decision support tool for integrated assessment of carbon capture, utilization and storage technology developed by members of the U.S.-China Clean Energy Research Center, Advanced Coal Technology Consortium. SimCCS Gateway is a science gateway built from the collaboration between the Indiana Geological & Water Survey and the Science Gateways Group at Indiana University.
        </p>
    </div>
</div>


<div class="container">

    <div class="row">

        <div class="col-md-6">
            <div class="thumbnail" style="border:none">
                <img src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/simccus-overview.png" width="260px" alt="SimCCS Overview">

                <div class="caption">
                    <p>
                        SimCCS supports decision making on CO<sub>2</sub> mitigation technology deployment by integrating applications in operations research, geographical information systems, CO<sub>2</sub> capture modelling, pipeline engineering design, and reservoir engineering and geology. At its core, SimCCS is driven by a mixed-integer linear programming optimization engine for obtaining solutions that drive model decisions.
                    </p>

                    <p>
                        SimCCS produces optimal solutions for integrated CCUS infrastructure deployment in three different modes:<br>
						(1) SimCCS<sup>CAP</sup>: the model is given an exogenously-defined amount of CO<sub>2</sub> to capture across one or more CO<sub>2</sub>-emitting sources.  Consequently, SimCCS designs the least-cost set of infrastructure to manage the desired CO<sub>2</sub> target.  This is considered to be the version of SimCCS to operate within an emissions cap, or cap-and-trade environment.  Alternatively, the user can define a fixed budget and let the optimization model maximize the amount of CO<sub>2</sub> that can be managed within that budget.<br>
						(2) SimCCS<sup>PRICE</sup>: the model deploys infrastructure in response to a price (or tax) on CO<sub>2</sub> emissions, essentially building CCUS infrastructure and managing CO<sub>2</sub> flows at a cost lower than to simply emit the CO<sub>2</sub> to the atmosphere.<br>
						(3) SimCCS<sup>TIME</sup>: the model introduces a temporal aspect to infrastructure deployment, building CCUS infrastructure during discrete time steps. The model can be executed in the context of either the CAP or PRICE mode.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="thumbnail" style="border:none">
                <img src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/bigred2.png" width="260px" alt="Bigred2">

                <div class="caption">
                    <p>
                        SimCCS has been developed as a desktop-level, science-based research tool requiring intimate knowledge of the framework to effectively execute the program, as well as the application of external, proprietary software including ESRI’s ArcGIS and IBM’s CPLEX. Here we further develop SimCCS to run on high-performance computing platforms such that robust optimal solutions can be obtained in the face of significant uncertainty. Toward this end, we will develop new algorithms and reduced-order solution methods that will allow thousands of SimCCS solutions to be analyzed to identify critical techno-economic thresholds in CCUS infrastructure deployment.

                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="thumbnail" style="border:none">
                <img src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/powered-by-airavata-transparent.png" width="260px" alt="Apache Airavata">

                <div class="caption">
                    <p>
                        SimCCS Gateway is powered by Apache Airavata. Apache Airavata is a software framework which is dominantly used to build Web-based science
                        gateways and assist to compose, manage, execute and monitor large scale applications and
                        workflows on distributed computing resources such as local clusters, supercomputers, national
                        grids, academic and commercial clouds. Airavata mainly supports long running applications and
                        workflows on distributed computational resources.


                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div id="contact-scigap" class="col-md-10 col-md-offset-1 text-center breathing-spaces">
            <h3>Contact Us</h3>
            <div>
                <span class="glyphicon glyphicon-envelope" style="font-size:6em;"></span><br/>
                You can contact Gateway Admin by sending a mail to <a href="mailto:geoco2@indiana.edu">Contact E-mail</a>
            </div>
        </div>
    </div>
</div>
