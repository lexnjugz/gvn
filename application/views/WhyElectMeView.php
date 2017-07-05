<section id="page-tree">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <h1>Why Re-Elect Me</h1>
            </div>
            <div class="col-md-7 col-sm-7">
                <ol class="breadcrumb pull-right hidden-xs">
                    <li><a href="<?= base_url('index.php/Home') ?>"><i class="ion-home"></i> Home</a></li>
                    <li class="active"><a>Why Re-Elect Me</a></li>
                </ol>
            </div>
        </div><!--row-->
    </div><!--container-->
</section><!--page-tree-->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 p-t-40 p-l-20 why_elect">
                <div class="p-t-20">
                    <input type="radio" checked name="why_re-elect" id="gov_dev_strategy" value="dev_strategy" onchange="why_relect(this.value)"/>
                    <label for="gov_dev_strategy">Governor Development Strategy</label>
                    <div class="tabs">
                        <ul class="nav nav-tabs why_elect_1">
                            <li class="active" id="why_elect_1_tab1"><a href="#socio-economic" data-toggle="tab">SOCIO-ECONOMIC</a></li>
                            <li><a href="#built_environ" data-toggle="tab">BUILT ENVIRONMENT</a></li>
                            <li><a href="#cross_cutting_issues" data-toggle="tab">CROSS CUTTING ISSUES</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content" id="why_elect_1_tab_content">
                            <div class="tab-pane active" id="socio-economic">
                                <div class="tab-desc">

                                    <table class="table table-sm table-striped table-bordered" id="why_re-elect_table1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">SPECIFIC CHALLENGES</th>
                                                <th class="text-center">INTERVENTION STRATEGIES</th>
                                                <th class="text-center">RATIONALE FOR THE STRATEGIES ADOPTED</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Health</td>
                                                <td>Improve access to adequate, quality and affordable health-care services at County, Sub-county, and Ward Levels.</td>
                                                <td>To address:
                                                    <ul>
                                                        <li>Low levels of access</li>
                                                        <li>High doctor-patient ratio</li>
                                                        <li>Dilapidated facilities and equipment</li> 
                                                        <li>Poor nutrition</li>
                                                        <li>High infant mortality rate</li>
                                                        <li>Increase life expectancy</li>
                                                        <li>Reduce morbidity</li>
                                                        <li>High cost of alternative health-care services</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Education</td>
                                                <td>Invest in adequate and quality education infrastructure.
                                                    Invest in training and capacity building for personnel in the teaching fraternity.
                                                    <br />
                                                    Enhance quality assurance and monitoring and evaluation measures.</td>
                                                <td>To address:
                                                    <ul>
                                                        <li>Low levels of access and enrollment </li>
                                                        <li>High dropout rates</li>
                                                        <li>Poor performance</li>
                                                        <li>Low levels of transition in the education system within the county </li>
                                                        <li>Low staffing levels</li>
                                                        <li>High teacher-pupil ratio </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Food Security</td>
                                                <td>Invest in non-rain fed agriculture.
                                                    Encourage PPP in provision of farm inputs, quality planting materials and crop diversification.
                                                    Increase acreage under food crops.<br />
                                                    Intensify agricultural, livestock, and fishing extension services. <br />
                                                    Increase awareness on cost effective land-use and food storage practices </td>
                                                <td>
                                                    To address:
                                                    <ul>
                                                        <li>Erratic rain patterns and temperatures</li>
                                                        <li>High cost of farm inputs</li>
                                                        <li>Poor quality planting materials</li>
                                                        <li>Over-reliance on a few food crops</li>
                                                        <li>Small and un-economic land holding practices</li>
                                                        <li>Inadequate knowledge and skills on effective agricultural, livestock, and fishing practices</li> 
                                                        <li>Negative attitudes and stereotypes on land-use</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Marketing Systems</td>
                                                <td>Build capacity of the citizens and business community for value realization</td>
                                                <td>To address issues of access to markets, competitive pricing, and diversification of commodities.</td>
                                            </tr>
                                            <tr>
                                                <td>Cultural Values and Practices</td>
                                                <td>Promote cultural dialogue to enhance progressive cultural values and practices and discard the retrogressive ones.</td>
                                                <td>To integrate and harmonize culture with development</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div> 

                            </div>
                            <div class="tab-pane" id="built_environ">
                                <div class="tab-desc ">

                                    <p>
                                        2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet sodales lacinia. Curabitur ut purus tincidunt, iaculis elit a, eleifend augue. Phasellus blandit augue vel sollicitudin blandit.
                                    </p>

                                </div>
                            </div>
                            <div class="tab-pane" id="cross_cutting_issues">
                                <div class="tab-desc ">

                                    <p>
                                        3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet sodales lacinia. Curabitur ut purus tincidunt, iaculis elit a, eleifend augue. Phasellus blandit augue vel sollicitudin blandit.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div><!--tabs end-->
                </div>
                <div class="p-t-20">
                    <input type="radio" name="why_re-elect" id="gov_policy_thrust" value="policy_thrust" onchange="why_relect(this.value)"/>
                    <label for="gov_policy_thrust">Governor's County Strategic Policy Thrust</label>
                    <div class="tabs">
                        <ul class="nav nav-tabs why_elect_2">
                            <li class="" id="why_elect_2_tab1"><a href="#development_issue" data-toggle="tab">DEVELOPMENT ISSUE</a></li>
                            <li><a href="#" data-toggle="tab">CAUSES</a></li>
                            <li><a href="#" data-toggle="tab">DEVELOPMENT OBJECTIVES</a></li>
                            <li><a href="#" data-toggle="tab">IMMEDIATE OBJECTIVES</a></li>
                            <li><a href="#" data-toggle="tab">POTENTIAL STRATEGIC POLICY THRUSTS</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content hidden" id="why_elect_2_tab_content">
                            <div class="tab-pane active" id="development_issue">
                                <div class="tab-desc ">

                                   <table class="table table-sm table-striped table-bordered" id="why_re-elect_table2">
                                        <thead>
                                            <tr>
                                                <th class="text-center">DEVELOPMENT ISSUE</th>
                                                <th class="text-center">CAUSES</th>
                                                <th class="text-center">DEVELOPMENT OBJECTIVES</th>
                                                <th class="text-center">IMMEDIATE OBJECTIVE</th>
                                                <th class="text-center">POTENTIAL STRATEGIC POLICY THRUSTS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Health</td>
                                                <td>Underdeveloped health care system</td>
                                                <td>Enhance access to adequate and quality health-care services</td>
                                                <td>Investment in health facilities, equipment and personnel as well as behavior change programs</td>
                                                <td>Improve, equip, and expand health facilities; and enhance behavior change programs in the County.</td>
                                            </tr>
                                            <tr>
                                                <td>Education</td>
                                                <td>Inadequate access, retention, poor performance, and low transition rates.</td>
                                                <td>Enhance access to high quality education at all levels</td>
                                                <td>Invest in educational facilities, personnel and programs.</td>
                                                <td>Improve, establish and equip educational facilities, personnel and programs in the County</td>
                                            </tr>
                                            <tr>
                                                <td>Food Insecurity</td>
                                                <td>Un-optimum land use and adoption of ineffective agricultural, livestock, and fishing practices</td>
                                                <td>Ensure optimum land-use and adoption of modern farming technologies to increase food production and surplus for the market.</td>
                                                <td>Encourage viable land-use and effective farming practices</td>
                                                <td>Enhance food security and agri-business for sustainable livelihoods. </td>
                                            </tr>
                                            <tr>
                                                <td>Marketing Systems</td>
                                                <td>Underdeveloped marketing systems in the County</td>
                                                <td>Optimize utilization of marketing outlets and facilities</td>
                                                <td>Operationalize utilization of marketing outlets and facilities</td>
                                                <td>Stimulate utilization and expand marketing outlets and facilities.</td>
                                            </tr>
                                            <tr>
                                                <td>Cultural Values and Practices</td>
                                                <td>Harboring some retrogressive cultural values and practices</td>
                                                <td>Identify and mainstream positive and progressive cultural values and practices in socio-economic development.</td>
                                                <td>Conduct cultural dialogue forums with stakeholders</td>
                                                <td>Build consensus on progressive and retrogressive cultural values and practices</td>
                                            </tr>
                                            <tr>
                                                <td>Poor Physical and Settlement Planning</td>
                                                <td>Inadequate enforcement of physical planning and settlement regulations</td>
                                                <td>Ensure proper physical and settlement planning at all levels in the County </td>
                                                <td>Review, develop, and enforce appropriate physical planning, policies and regulations</td>
                                                <td>Plan, control, and coordinate physical urban and rural development.</td>
                                            </tr>
                                            <tr>
                                                <td>Inadequate Road, Rail, and Air Transport Network</td>
                                                <td>Underdeveloped road, rail, and air transport network</td>
                                                <td>Maintain, improve, and expand the transport and communication infrastructure </td>
                                                <td>Invest in road, rail, and air transport projects.</td>
                                                <td>Achieve enhanced connectivity and accessibility through road, rail, and air transport networks.</td>
                                            </tr>
                                            <tr>
                                                <td>Inadequate Access to Energy</td>
                                                <td>Unexplored and undiversified energy potential </td>
                                                <td>Increase access and utilization of renewable, affordable and sustainable energy sources</td>
                                                <td>Invest in alternative and renewable energy sources.</td>
                                                <td>Enhance access to adequate energy for both domestic and commercial use.</td>
                                            </tr>
                                            <tr>
                                                <td>Inadequate Telecommunications Network Connectivity</td>
                                                <td>Poor quality telecommunication network services </td>
                                                <td>Improve access and connectivity</td>
                                                <td>Encourage investment in telecommunication sub-sector through PPP.</td>
                                                <td>Achieve high quality connectivity locally, nationally, regionally and globally.</td>
                                            </tr>
                                            <tr>
                                                <td>Inadequate Public Utilities and Amenities</td>
                                                <td>Underdeveloped and poorly managed public amenities</td>
                                                <td>Maintain, improve and expand public utilities and amenities.</td>
                                                <td>Invest in adequate and high quality public amenities through PPP.</td>
                                                <td>Achieve access to high quality public and social amenities.</td>
                                            </tr>
                                            <tr>
                                                <td>Inadequate access to quality water, sanitation and sewerage services</td>
                                                <td>Under-protection and mismanagement of existing water and sewerage infrastructure</td>
                                                <td>Maintain, improve and expand water, sanitation and sewerage infrastructure at all levels in the County</td>
                                                <td>Invest in proper water and sanitation facilities as well as waste disposal and management systems through PPP</td>
                                                <td>Enhance access to adequate and high quality water and sanitation as well as waste management and disposal systems in urban and rural areas.</td>
                                            </tr>
                                        </tbody>
                                   </table>

                                </div> 

                            </div>
                            <div class="tab-pane" id="causes">
                                <div class="tab-desc ">

                                    <p>
                                        2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet sodales lacinia. Curabitur ut purus tincidunt, iaculis elit a, eleifend augue. Phasellus blandit augue vel sollicitudin blandit.
                                    </p>

                                </div>
                            </div>
                            <div class="tab-pane" id="dev_objectives">
                                <div class="tab-desc ">

                                    <p>
                                        3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet sodales lacinia. Curabitur ut purus tincidunt, iaculis elit a, eleifend augue. Phasellus blandit augue vel sollicitudin blandit.
                                    </p>

                                </div>
                            </div>
                            <div class="tab-pane" id="im_objectives">
                                <div class="tab-desc ">

                                    <p>
                                        3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet sodales lacinia. Curabitur ut purus tincidunt, iaculis elit a, eleifend augue. Phasellus blandit augue vel sollicitudin blandit.
                                    </p>

                                </div>
                            </div>
                            <div class="tab-pane" id="potential">
                                <div class="tab-desc ">

                                    <p>
                                        3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet sodales lacinia. Curabitur ut purus tincidunt, iaculis elit a, eleifend augue. Phasellus blandit augue vel sollicitudin blandit.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div><!--tabs end-->
                </div>
                <div class="p-t-20">
                    <input type="radio" name="why_re-elect" id="gov_swot_analysis" value="swot_analysis" onchange="why_relect(this.value)"/>
                    <label for="gov_swot_analysis">Governor's Busia County Swot Analysis</label>
                    <div class="tabs">
                        <ul class="nav nav-tabs why_elect_3">
                            <li class="" id="why_elect_3_tab1"><a href="#issue" data-toggle="tab">CROSS CUTTING ISSUE</a></li>
                            <li><a href="#" data-toggle="tab">STRENGTHS</a></li>
                            <li><a href="#" data-toggle="tab">WEAKNESS</a></li>
                            <li><a href="#" data-toggle="tab">OPPORTUNITIES</a></li>
                            <li><a href="#" data-toggle="tab">THREATS</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content hidden" id="why_elect_3_tab_content">
                            <div class="tab-pane active" id="issue">
                                <div class="tab-desc ">

                                   <table class="table table-sm table-striped table-bordered" id="why_re-elect_table2">
                                        <thead>
                                            <tr>
                                                <th class="text-center">CROSS CUTTING ISSUE</th>
                                                <th class="text-center">STRENGTHS</th>
                                                <th class="text-center">WEAKNESS</th>
                                                <th class="text-center">OPPORTUNITIES</th>
                                                <th class="text-center">THREATS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Poverty</td>
                                                <td>Availability of large tracks of land Strategic positioning as a cross-border county Availability of affordable labour Youth and enterprising population</td>
                                                <td>Poor infrastructure Small land holdings Negative perception and Attitude to positive change A small percentage of well trained professionals among the population. Fragile ecosystem and most wetlands in Yala Swamp subject to frequent floods</td>
                                                <td>Ready Market for Farm produce Availability of devolved funds Devolved government structure Opportunity for integration and partnership with the national government and development partners Potential for adoption of modern farming techniques and agribusiness</td>
                                                <td>Limited access to credit; Lack of employment opportunities Effects of climate change i.e. floods and droughts; Political forces and influence polarizing communities</td>
                                            </tr>
                                            <tr>
                                                <td>HIV/AIDS</td>
                                                <td>Increased number of PMTC, HBC, VCT and ART sites in the county; High rate of awareness estimated at 98%; Ability to cope with stigma and discrimination;Strong community support for Male circumcision programme; Willing clients to access treatment and support;</td>
                                                <td>Low economic power for most households due to high poverty levels Negative attitudes and outdated cultural practices such as wife inheritance, and negative sexual behavior; Inadequate staff; High levels of poverty; High number of HIV/AIDS patients; Increase in number of orphans;</td>
                                                <td>Dedicated practical institutions working with communities (CSOs, CBOs, NGOs, FBOs, women & youth groups); Many stakeholders willing to carry out HIV/AIDS activities; Willing development partners and Civil society to support the County</td>
                                                <td>High cost of trainings on PMTCT, VCT services Increase in opportunistic ailments bring about burdens in families;</td>
                                            </tr>
                                            <tr>
                                                <td>Children Issues</td>
                                                <td>Vibrant children office at the County Children friendly civil society</td>
                                                <td>Inadequate financial resources Lack of a comprehensive  county strategic plan Break down of social- cultural and family fabric</td>
                                                <td>Mainstreaming of children rights in the Constitution of Kenya 2010 Domestication of the UN Conventions on children rights Equal parenting responsibilities  Existence of children right lobby groups and CSOs </td>
                                                <td>The porous border gateways Exposure to deviant social behavior through social media Vulnerability of children to child labour, defilement, and child prostitution. Vulnerability to HIV and AIDS.</td>
                                            </tr>
                                            <tr>
                                                <td>Gender and Related Issues</td>
                                                <td>Mainstreaming of gender initiatives in government funded initiatives in the County Establishment of gender focal points at County, Sub-county, and Ward levels. Affirmative action in employment in the County</td>
                                                <td>Negative cultural beliefs and practices; Low literacy levels in adults; Male chauvinism and patriarchy; Rural Urban Migration High prevalence of HIV/AIDS;</td>
                                                <td>Mainstreaming of gender issues in the Constitution of Kenya2010 provides a framework for integrating issues of gender equity and equality. Recognition and support for girl child education by community through civic education; Recognition and empowerment of women in leadership and decision making positions through affirmative action Gender responsive institutions including CBOs, NGOS, FBOs in the County; Women and Youth Enterprise Development Funds and Uwezo Fund; Micro-finance institutions including: KWFT, K-REP, WEDCO New Banks in the Country provide loans</td>
                                                <td>Limited opportunity to access credit for expansion of business among the female gender; Misconception of gender as a concept and development index Negative cross-border effects and sexually transmitted diseases; Feminization of poverty and HIV/AIDS; Foreign stereotypes</td>
                                            </tr>
                                            <tr>
                                                <td>Persons with disabilities</td>
                                                <td>Representation of people with disabilities in every development committee; Initiation of formation of groups to access funding and support; Mainstreamed and integrated people with disabilities in development.</td>
                                                <td>Low levels of literacy; Low level of technology adoption; Lack of adequate data on the number of people living with disabilities; High poverty levels;Most public facilities designs not friendly;</td>
                                                <td>Enactment of Disability Act 2003 and article 54 of the Kenyan Constitution; Supportive change agents: government, CBOs, NGOs, CSOs, FBOs, and the private sector; Recognition of people with disabilities at international, regional, national and local levels; Political goodwill and empathy; Supportive policies and enabling environment; Conducive Constitutional environment; Availability of funding programmes such as Uwezo Fund, Youth Enterprise Fund and women development fund providing space for people with disabilities to access loans</td>
                                                <td>Vulnerability to HIV/AIDS Community exclusion, abuse and stigmatization</td>
                                            </tr>
                                            <tr>
                                                <td>Information and Communication Technology</td>
                                                <td>Fairly developed telephone network Fairly literate population stablished  resource centers</td>
                                                <td>Limited integration of ICT in sectors that support rural development like productive sector, environment, and education health. Limited internet services. Undeveloped rural economy. Low levels of ICT literacy</td>
                                                <td>Developed television and radio networks Laying of fiber optic cable connectivity Establishment of the ICT and Communications Ministry</td>
                                                <td>High cost of ICT equipment and infrastructure Low electricity coverage Proliferation of cyber crime Moral decay through access of pornography content Misinformation, propaganda and incitement which can lead to violence</td>
                                            </tr>
                                            <tr>
                                                <td>Environmental Conservation</td>
                                                <td>Active Committees in the County</td>
                                                <td>Environmental pollution both point and non-point source rains pant pollution of rivers and water sources; Lack of Waste management systems; Cultivating on the river banks; Excessive charcoal burning and use of fuel wood as the main cooking fuel hence deforestation; Land use practices that disregard the need to conserve soil and renew soil fertility. Lack of environmental management plan High poverty levels Unplanned urban settlements Increased population putting pressure on existing social amenities and facilities;</td>
                                                <td>Environmental Management Conservation act of 2004 (EMCA) Mainstreaming of environment conservation and management in government agencies Various government programmes addressing environmental concerns </td>
                                                <td>Climate change and adverse weather conditions </td>
                                            </tr>
                                            <tr>
                                                <td>Disaster management</td>
                                                <td>Institutional memory and learning curve effect. Existence of indigenous early warning system</td>
                                                <td>The wait and see attitude Inadequate resources and budget Lack of disaster management plan and kitty</td>
                                                <td>Devolution of functions has brought disaster management responsibilities closer to people. Availability of development partners, private sector organizations  and humanitarian organizations who are willing to offer support </td>
                                                <td>Erratic Climate change Simmering intra- and intercommunity disputes. Criminal activities </td>
                                            </tr>
                                            <tr>
                                                <td>Poor governance</td>
                                                <td>Visionary and Committed leadership Citizens’ increasing concern of the affairs of the County. Putting in place development plans for the County. Effective management and utilization of the funds.</td>
                                                <td>Skeletal institutional structures to embed full-fledged operational governance framework. Inadequate knowledge on the requirement of the new constitutional dispensation requirements Apparent and perceived resistance to change. </td>
                                                <td>The Constitution of Kenya 2010. Active civil society organizations</td>
                                                <td>Political interference Conflict of interest </td>
                                            </tr>
                                            <tr>
                                                <td>Citizen participation</td>
                                                <td>Increased civic awareness and participation. Access to information</td>
                                                <td>Citizen apathy Reactionary approach based on grapevine Political manipulations and instigations</td>
                                                <td>The Constitution of Kenya 2010. Active civil society organizations </td>
                                                <td>Real and apparent influence from neighbouring counties Political alliances and polarization</td>
                                            </tr>
                                            <tr>
                                                <td>Insecurity</td>
                                                <td>Visionary and Committed leadership Increased surveillance Harmonious inter-ethnic co-existence </td>
                                                <td>Poor communication infrastructure and patrol facilities. Inadequate street lighting in urban centers. Increased incidences of drug and substance abuse</td>
                                                <td>Cooperation between national security agents and County government. Impeding implementation of the Nyumba Kumi security strategy</td>
                                                <td>Porous border points leading to smuggling and proliferation of illegal firearms. Increased incidences of human trafficking and drugs.</td>
                                            </tr>
                                        </tbody>
                                   </table>

                                </div> 

                            </div>
                            <div class="tab-pane" id="strength">
                                <div class="tab-desc ">

                                    <p>
                                        2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet sodales lacinia. Curabitur ut purus tincidunt, iaculis elit a, eleifend augue. Phasellus blandit augue vel sollicitudin blandit.
                                    </p>

                                </div>
                            </div>
                            <div class="tab-pane" id="weakness">
                                <div class="tab-desc ">

                                    <p>
                                        2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet sodales lacinia. Curabitur ut purus tincidunt, iaculis elit a, eleifend augue. Phasellus blandit augue vel sollicitudin blandit.
                                    </p>

                                </div>
                            </div>
                            <div class="tab-pane" id="opportunites">
                                <div class="tab-desc ">

                                    <p>
                                        2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet sodales lacinia. Curabitur ut purus tincidunt, iaculis elit a, eleifend augue. Phasellus blandit augue vel sollicitudin blandit.
                                    </p>

                                </div>
                            </div>
                            <div class="tab-pane" id="threats">
                                <div class="tab-desc ">

                                    <p>
                                        3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet sodales lacinia. Curabitur ut purus tincidunt, iaculis elit a, eleifend augue. Phasellus blandit augue vel sollicitudin blandit.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div><!--tabs end-->
                </div>
            </div>
        </div>
    </div>
</section>
<hr style="width: 50%" />
<section id="recent-work" class="padding-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center margin-btm40 wow animated bounceIn">
                <h1>County Projects</h1>
                <hr style="width: 30%; border-top: 2px solid #eee;" />
                <h2 class="subtitle"><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></h2>
            </div>
            <div class="col-md-12">
                <ul class=" portfolio-filters text-center">
                    <li class="filter" data-filter="all">ALL</li>
                    <li class="filter" data-filter="economics">ECONOMICS</li>
                    <li class="filter" data-filter="roads">ROADS</li>
                    <li class="filter" data-filter="agrofarming">AGROFARMING</li>
                    <li class="filter" data-filter="health">HEALTH</li>
                    <li class="filter" data-filter="education">EDUCATION</li>
                    <li class="filter" data-filter="food">FOOD</li>
                </ul><!--portfolio filter lisr-->

                <div id="grid" class="row">

                    <div class="portfolio-item mix food col-xs-12 col-sm-4">
                        <a href="#">
                            <div class="image-sec">
                                <img class="img-responsive" src="<?= base_url('assets/img/img-1.jpg') ?>" alt="Portfolio">
                                <div class="image-overlay">
                                    <p><i class="ion-ios7-plus-empty"></i></p>
                                </div>
                            </div> <!--image-->
                        </a>
                    </div> <!--portfolio-item -->

                    <div class="portfolio-item mix education col-xs-12 col-sm-4">
                        <a href="#">
                            <div class="image-sec">
                                <img class="img-responsive" src="<?= base_url('assets/img/img-2.jpg') ?>" alt="Portfolio">
                                <div class="image-overlay">
                                    <p><i class="ion-ios7-plus-empty"></i></p>
                                </div>
                            </div> <!--image-->
                        </a>
                    </div> <!--portfolio-item -->

                    <div class="portfolio-item mix economics col-xs-12 col-sm-4">
                        <a href="#">
                            <div class="image-sec">
                                <img class="img-responsive" src="<?= base_url('assets/img/img-3.jpg') ?>" alt="Portfolio">
                                <div class="image-overlay">
                                    <p><i class="ion-ios7-plus-empty"></i></p>
                                </div>
                            </div> <!--image-->
                        </a>
                    </div> <!--portfolio-item -->

                    <div class="portfolio-item mix roads col-xs-12 col-sm-4">
                        <a href="#">
                            <div class="image-sec">
                                <img class="img-responsive" src="<?= base_url('assets/img/img-4.jpg') ?>" alt="Portfolio">
                                <div class="image-overlay">
                                    <p><i class="ion-ios7-plus-empty"></i></p>
                                </div>
                            </div> <!--image-->
                        </a>
                    </div> <!--portfolio-item -->

                    <div class="portfolio-item mix agrofarming col-xs-12 col-sm-4">
                        <a href="#">
                            <div class="image-sec">
                                <img class="img-responsive" src="<?= base_url('assets/img/img-5.jpg') ?>" alt="Portfolio">
                                <div class="image-overlay">
                                    <p><i class="ion-ios7-plus-empty"></i></p>
                                </div>
                            </div> <!--image-->
                        </a>
                    </div> <!--portfolio-item -->

                    <div class="portfolio-item mix health col-xs-12 col-sm-4">
                        <a href="#">
                            <div class="image-sec">
                                <img class="img-responsive" src="<?= base_url('assets/img/img-6.jpg') ?>" alt="Portfolio">
                                <div class="image-overlay">
                                    <p><i class="ion-ios7-plus-empty"></i></p>
                                </div>
                            </div> <!--image-->
                        </a>
                    </div> <!--portfolio-item -->                                                   
                </div> <!--grid -->
                <div class="divied-40"></div><!--divide by 40px -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="#" class="btn btn-theme btn-lg">View All County Projects</a>
                    </div>
                </div><!--row-->
            </div><!--col-md-12-->
        </div><!--row-->
    </div><!--container end-->
</section><!--recent work-->
<script>
    function why_relect(value){
        
        switch (value) {
            case "dev_strategy":
                $('#why_elect_1_tab1').addClass('active');
                $('#why_elect_1_tab_content').removeClass('hidden');
                $('#why_elect_2_tab1').removeClass('active');
                $('#why_elect_2_tab_content').addClass('hidden');
                $('#why_elect_3_tab1').removeClass('active');
                $('#why_elect_3_tab_content').addClass('hidden');
                break;
            case "policy_thrust":
                $('#why_elect_1_tab1').removeClass('active');
                $('#why_elect_1_tab_content').addClass('hidden');
                $('#why_elect_2_tab1').addClass('active');
                $('#why_elect_2_tab_content').removeClass('hidden');
                $('#why_elect_3_tab1').removeClass('active');
                $('#why_elect_3_tab_content').addClass('hidden');
                break;
            case "swot_analysis":
                $('#why_elect_1_tab1').removeClass('active');
                $('#why_elect_1_tab_content').addClass('hidden');
                $('#why_elect_2_tab1').removeClass('active');
                $('#why_elect_2_tab_content').addClass('hidden');
                $('#why_elect_3_tab1').addClass('active');
                $('#why_elect_3_tab_content').removeClass('hidden');
                break;
            default:

                break;
        }
    }
</script>