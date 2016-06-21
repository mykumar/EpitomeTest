<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Log;
use App\Models\Beta;

class HtmlController extends BaseController
{
    public function getBetas()
    {
        Log::info("we are in the BetaController::getBetas");
        $users = Beta::getData();

        Log::info(json_encode($users));
    }

    public function getSingle()
    {
        Log::info("we are in the BetaController::getSingle");
        $users = Beta::getSingle();

        Log::info(json_encode($users));
    }
    public function testMultiParams($id1, $id2)
    {
        Log::info("we are in the BetaController::testMultiParams");
        Log::info("Id 1 = :: " + $id1);
        Log::info("Id 2 = :: " + $id2);
    }

    public function testAngular()
    {
        Log::info("we are in the BetaController::testAngular");
        return view('angular');
    }


    public function getDoc()
    {

        Log::info("we are in the BetaController::getDoc");
        $content = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<TITLE></TITLE>
	<META NAME="GENERATOR" CONTENT="LibreOffice 4.1.6.2 (Linux)">
	<META NAME="AUTHOR" CONTENT="shiva">
	<META NAME="CREATED" CONTENT="20140803;95600000000000">
	<META NAME="CHANGEDBY" CONTENT="shiva">
	<META NAME="CHANGED" CONTENT="20150815;90900000000000">
	<META NAME="AppVersion" CONTENT="12.0000">
	<META NAME="DocSecurity" CONTENT="0">
	<META NAME="HyperlinksChanged" CONTENT="false">
	<META NAME="LinksUpToDate" CONTENT="false">
	<META NAME="ScaleCrop" CONTENT="false">
	<META NAME="ShareDoc" CONTENT="false">
	<STYLE TYPE="text/css">
	<!--
		@page { margin-left: 0.75in; margin-right: 0.9in; margin-top: 0.5in; margin-bottom: 0.13in }
		P { margin-bottom: 0.08in; direction: ltr; widows: 2; orphans: 2 }
		A:link { color: #0000ff; so-language: zxx }
	-->
	</STYLE>
</HEAD>
<BODY LANG="en-US" LINK="#0000ff" DIR="LTR">
<DIV TYPE=HEADER>
	<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>		</FONT></FONT></P>
</DIV>
<P LANG="fr-FR" STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><FONT COLOR="#333399"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="fr-FR"><B>Shiva
Kumar S</B></SPAN></FONT></FONT></FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Senior
Developer - Fishpond Inc., Auckland</B></FONT></FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Email
       </B></FONT></FONT><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">:
</FONT></FONT><FONT COLOR="#222222"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN STYLE="background: #ffffff">shivaj.nz@gmail.com</SPAN></FONT></FONT></FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Phone
      : </B></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">+64
211675329</FONT></FONT></FONT></FONT></FONT></P>
<P ALIGN=LEFT STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-right: -0.12in; background: #e5e5e5; border-top: none; border-bottom: 1px solid #00000a; border-left: none; border-right: none; padding-top: 0in; padding-bottom: 0.03in; padding-left: 0in; padding-right: 0in; line-height: 100%">
<FONT COLOR="#000080"><B><FONT FACE="Calibri, serif">Career
Highlights			</FONT></B></FONT></P>
<UL>
	<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3><FONT COLOR="#000000"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Having
	Ten years of experience in developing Enterprise Software and
	designing the Multi-tier Applications</FONT></FONT></FONT></FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3><FONT COLOR="#000000"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Experience
	in Waterfall, Agile and Scrum methodologies</FONT></FONT></FONT></FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3><FONT COLOR="#000000"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Having
	Nine years of working experience on PHP and Object Oriented PHP</FONT></FONT></FONT></FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT COLOR="#000000"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Extensive
	working experience on Model-View-Controller (MVC) frameworks and
	development frameworks such as Zend</FONT></FONT></FONT></FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT COLOR="#000000"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Seven
	Years of Extensive working experience with PHP and related
	frameworks like symphony, and wordpress</FONT></FONT></FONT></FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT COLOR="#000000"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Extensive
	working experience on the HTML, AJAX and CSS frameworks like Less,
	Sass and compass  (Used with the Symfony Asset Manager called
	Assetic) </FONT></FONT></FONT></FONT></FONT>
	</P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT COLOR="#000000"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Nine
	Years of Working experience with  databases (RDMS) like Oracle,
	Mysql using the SQL and Object/Relational Mapping (ORM) using the
	Doctrine Project</FONT></FONT></FONT></FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%; widows: 0; orphans: 0">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Five
	years of working experience on the Mobile Web Development used zend </FONT></FONT></FONT></FONT>
	</P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%; widows: 0; orphans: 0">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">One
	year of hands-on working experience with single page applications
	with Angular JS</FONT></FONT></FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%; widows: 0; orphans: 0">
	<FONT FACE="Calibri, serif">Extensive working experience with Java
	Script and related frameworks like</FONT><FONT COLOR="#000000"><FONT FACE="Calibri, serif">
	Bootstrap</FONT></FONT><FONT FACE="Calibri, serif"> and Jquery, JSON
	</FONT>
	</P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%; widows: 0; orphans: 0">
	<FONT FACE="Calibri, serif">Extensive working experience on the
	designing and developing Responsive web application development
	including on mobile web sites</FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT COLOR="#000000"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Good
	 working experience on  Database Design and performance optimization
	</FONT></FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT COLOR="#000000"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Experience
	in Service Oriented Architecture using Web Services like SOAP &amp;
	Restful (REST) web services</FONT></FONT></FONT></FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%; widows: 0; orphans: 0">
	<FONT COLOR="#000000"><FONT FACE="Calibri, serif">Five years of
	hands-on experience with Object oriented PHP and developed high
	performance systems</FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%; widows: 0; orphans: 0">
	<FONT COLOR="#000000"><FONT FACE="Calibri, serif">Identified
	technical SEO issues that affect search crawlers and ranking of the
	company web site, implemented strategies to improve organic search
	rankings. </FONT></FONT>
	</P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%; widows: 0; orphans: 0">
	<FONT COLOR="#000000"><FONT FACE="Calibri, serif">Rewrote HTML and
	CSS for client websites to meet validation requirements and improve
	organic SEO initiatives. </FONT></FONT>
	</P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%; widows: 0; orphans: 0">
	<FONT COLOR="#000000"><FONT FACE="Calibri, serif">Good experience
	with PHP debugging tools like Xdebug and kint</FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%; widows: 0; orphans: 0">
	<FONT COLOR="#000000"><FONT FACE="Calibri, serif">Eight years
	working experience with Ant, PHPUnit, Test Driven Development (TDD)</FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT COLOR="#000000"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Extensive
	Working experience and good command on the Data Structures, Design
	Patterns and UML Concepts</FONT></FONT></FONT></FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT COLOR="#000000"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Good
	working experience on creating the Requirement Specification, High
	Level and technical (low-Level) Design documents</FONT></FONT></FONT></FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%; widows: 0; orphans: 0">
	<FONT COLOR="#000000"><FONT FACE="Calibri, serif">Seven Years of
	working experience with </FONT></FONT><FONT FACE="Calibri, serif">Subversion
	and</FONT><FONT COLOR="#000000"><FONT FACE="Calibri, serif"> Git</FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%; widows: 0; orphans: 0">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3><FONT COLOR="#000000"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Good
	verbal and written communication skill</FONT></FONT></FONT></FONT></FONT></P>
</UL>
<P STYLE="margin-right: -0.12in; background: #e5e5e5; border-top: none; border-bottom: 1px solid #00000a; border-left: none; border-right: none; padding-top: 0in; padding-bottom: 0.03in; padding-left: 0in; padding-right: 0in; line-height: 100%">
<FONT COLOR="#000080"><B><FONT FACE="Calibri, serif">Career
Achievements</FONT></B></FONT></P>
<UL>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">For
	the </FONT></FONT><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Fishpond</B></FONT></FONT><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">,
	designed and developed the new complex Fish-Shot system which helped
	the warehouse to dispatch the items and present them on the
	Fishpond.co.nz website. Also integrated it, with the existing
	systems which they are using for 8 years. </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Designed
	and developed the Cloud SaaS products for the most prominent
	companies like, Mobile Iron, America Online (AOL) and
	Emerson-Trellis </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Developed
	the Cloud product  modules  for the USA No. 1 online insurance
	company called as </FONT></FONT><FONT COLOR="#0000ff"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><U>esurance.com</U></FONT></FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">As
	a single member, designed and development the complete Online
	Analytical System for the New Zealand’s Future skills academy</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"> <FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">As
	a part-time developer, I developed mobile games for the infinite
	games company and successfully released to the Google play and apple
	market </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">All
	these years I learned and believed in two things, hard work and as
	the time passes on everything will settle down, these two things
	helped me to face new challenges successfully and learn &amp; become
	proficient in new technologies, even if I did not know those
	technologies before, I tried to complete them within given
	deadlines.     </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">I
	like involving in the social knowledge market sites like
	stackoverflow (Got good reputation of 114 and badges) </FONT></FONT></FONT></FONT>
	</P>
</UL>
<P STYLE="margin-right: -0.12in; background: #e5e5e5; border-top: none; border-bottom: 1px solid #00000a; border-left: none; border-right: none; padding-top: 0in; padding-bottom: 0.03in; padding-left: 0in; padding-right: 0in; line-height: 100%">
<FONT COLOR="#000080"><B><FONT FACE="Calibri, serif">Professional
Experience	</FONT></B></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Calibri, serif">Fishpond
Limited						               Oct 2014 to Present</FONT></P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%; page-break-after: avoid">
<IMG SRC="i_a53c53502a8a46eb_html_eae231b0.gif" ALIGN=LEFT>

</P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%; page-break-after: avoid">
<BR>
</P>
<P STYLE="margin-bottom: 0.14in"><FONT FACE="Calibri, serif">Fishpond
is an Australian and New Zealand No. 1 online selling company. It was
one of the first major companies to sell books over the internet in
New Zealand. Fishpond.co.nz is a full-scale online bookstore. It also
sells DVDs, music CDs, games and gaming software as well as Toys. In
mid 2013, it had nearly 13 million items in its catalogue, and made
20,000 sales per day.</FONT></P>
<UL>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Developed
	the complete new system called Fish-shot using the wordpress and
	integrated it to the existing system which the fish-pond is using at
	present.</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">I
	used extensively HTML5 Canvas for the Fish-shot system and developed
	libraries</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Developed
	custom wordpress plug-ins for the Fish-shot system </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Building
	an application which gets orders from eBay or Amazon, storing these
	data into DB and handles inventories and logistics. Creating models
	and controllers. </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Understanding
	the retail business &amp; industry trends for developing the tools
	required</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Performed
	redesigns of company\'s online selling website. </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Code
	HTML pages from designs for website that utilizing HTML4, CSS and
	JavaScript</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Re-Designed
	the existing code base for the responsive design using the
	Bootstrap, wordpress and Jquery  </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Designed
	and implemented database schema and front end web development </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Designed
	and helped the existing team and systems to switch to the Test
	Driven Development</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Developed
	and redesigned internal tools for the purchasing system.</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Identified
	technical SEO issues that affect search crawlers and ranking of the
	company web site, implemented strategies to improve organic search
	rankings</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Designed
	and developed the Caching Structure using the Memcached for the
	Fishpond.co.nz</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Normalized
	Huge set of database tables to improve performance and more reliable
	queries</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Tested
	and optimized queries and indices  </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Developing
	CRON jobs for real-time background data analysis, management  and
	for automated billing system</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Designed
	the new hosting environments on Amazon AWS</FONT></FONT></FONT></FONT></P>
</UL>
<P STYLE="margin-bottom: 0.14in"><BR><BR>
</P>
<P STYLE="margin-bottom: 0.14in"><BR><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Calibri, serif">Future-Skills,
Auckland					               Dec 2013 – Mar. 2014</FONT></P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%; page-break-after: avoid">
<FONT FACE="Tahoma, serif"><FONT SIZE=3><B><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">During
Summer Holidays of Post Graduation                  </FONT></FONT></B></FONT></FONT>
</P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%; page-break-after: avoid">
<IMG SRC="i_a53c53502a8a46eb_html_eae231b0.gif" ALIGN=LEFT><BR>
</P>
<P STYLE="margin-bottom: 0.14in"><FONT FACE="Calibri, serif">Future
Skills is a New Zealand-owned Private Training Establishment founded
in 2001 and based in Auckland, New Zealand. They automated their
entire organization activities (from Enrolments to financial
managements) using the Enrol Pro Software.  </FONT>
</P>
<P STYLE="margin-bottom: 0.14in"><FONT FACE="Calibri, serif">Enrol
Pro software is outdated and it is unable to reach the daily demands
(mainly Analysis and prediction) of the organization. So to overcome
this, we developed a Online Analytical system which analysis the
historic and operational data to generate Dash Boards and reports for
the Program Leaders and Top Level Managers. </FONT>
</P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%; page-break-after: avoid">
<BR>
</P>
<UL>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Understanding
	the customer needs and business</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Understanding
	the existing Enrol Pro System which they are using for 10 years</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Designed
	and Developed Components for analysis the database </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">UML
	Diagrams are developed in Enterprise Architecture</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Designed
	and Developed the Entire DashBoard (for Front End) using the
	wordpress CMS</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Developed
	the custom admin and clients Themes for the wordpress CMS</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Developing
	the design artifacts like sequence and component diagrams for every
	story (or feature)</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Analyzing
	and Proposing the architecture enhancements </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Interacting
	with cross-functional groups including product manager, customer
	support and sales to develop new functionality and support existing
	customers</FONT></FONT></FONT></FONT></P>
</UL>
<P STYLE="margin-left: 0.75in; margin-bottom: 0in; line-height: 100%">
<BR>
</P>
<P STYLE="margin-left: 0.75in; margin-bottom: 0in; line-height: 100%">
<BR>
</P>
<P STYLE="margin-bottom: 0.14in"><BR><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Calibri, serif">Brainstorm
Technologies    				                          Apr 2010 - Nov 2012</FONT></P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%; page-break-after: avoid">
<FONT FACE="Tahoma, serif"><FONT SIZE=3><B><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Clients:</FONT></FONT></B><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN STYLE="font-weight: normal">
 Emerson\'s (<A HREF="http://www.emerson.com/">emerson.com/</A>),
Esurance - USA </SPAN></FONT></FONT></FONT></FONT>
</P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%; page-break-after: avoid">
<IMG SRC="i_a53c53502a8a46eb_html_eae231b0.gif" ALIGN=LEFT>

</P>
<P STYLE="margin-bottom: 0.14in"><BR><BR>
</P>
<P STYLE="margin-bottom: 0.14in"><FONT FACE="Calibri, serif">Worked
with the client Emerson on Project Trellis. Trellis is Mass
virtualization software, to replace the cloud and disparate tools
used by traditional facilities and IT managers, which are more costly
and difficult than ever to manage data centers. Then, I worked on
another client called as Esurance, which is a USA No.1 online car
insurance policy Company which is in market since 1999. </FONT>
</P>
<P STYLE="margin-left: 0.75in; margin-bottom: 0in; line-height: 100%">
<BR>
</P>
<UL>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Write
	HTML5/CSS3, PHP, and JavaScript code. </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Generate
	business reports from MySQL using a combination of PHP and SQL</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Develop
	of web applications using PHP/Zend Framework for back end solutions</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Designed
	and developed custom order management plugins for the Magento</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Developed
	new features for internal and external web-based applications </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Extensively
	used web-Services &amp; worked on SOAP (API) to enable applications
	to communicate with each other.</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Interacted
	with cross-functional groups including product manager, customer
	support and sales to develop new functionality and support existing
	customers and existing software</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Mentor
	and lead developers by providing guidance on design and
	implementation</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Perform
	routine program modifications, performance tuning, problem solving,
	debugging, and unit testing.</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Followed
	and Implemented Agile Scrum Cycles</FONT></FONT></FONT></FONT></P>
</UL>
<P STYLE="margin-left: 0.75in; margin-bottom: 0in; line-height: 100%">
<BR>
</P>
<P STYLE="margin-bottom: 0.14in"><BR><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Calibri, serif">Value
labs Pvt. Ltd.						               	    Jan 2006 - Mar 2010</FONT></P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%; page-break-after: avoid">
<FONT FACE="Tahoma, serif"><FONT SIZE=3><B><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Outsourced
To: </FONT></FONT></B><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN STYLE="font-weight: normal">Arian
Infosys, Global ERP Solutions Inc.</SPAN></FONT></FONT></FONT></FONT></P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%; page-break-after: avoid">
<FONT FACE="Tahoma, serif"><FONT SIZE=3><B><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Clients:</FONT></FONT></B><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN STYLE="font-weight: normal">
mobileiron.com,</SPAN></FONT></FONT><B><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">
</FONT></FONT></B><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN STYLE="font-weight: normal">sedata.com,
Radiant Systems (Now Purchased by NCR)</SPAN></FONT></FONT><B><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">
                 </FONT></FONT></B></FONT></FONT>
</P>
<P ALIGN=JUSTIFY STYLE="margin-top: 0.17in; margin-bottom: 0.17in; line-height: 100%; page-break-after: avoid">
<IMG SRC="i_a53c53502a8a46eb_html_eae231b0.gif" ALIGN=LEFT><BR><BR>
</P>
<P ALIGN=JUSTIFY STYLE="margin-top: 0.17in; margin-bottom: 0.17in; line-height: 100%; page-break-after: avoid">
<FONT FACE="Tahoma, serif"><FONT SIZE=3><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN STYLE="font-weight: normal">Worked
with client Mobile Iron’s Mobile Device Management solutions
provide end-to-end security and management for apps, docs, and
devices. Utilizing Mobile Iron software, enterprise can establish a
virtual perimeter to secure mobile delivery of business data and
applications. Also worked for the client Radiant Systems, which
provides innovative store technology to the hospitality and retail
industries using the Point Of Sales and integrated systems.   </SPAN></FONT></FONT></FONT></FONT>
</P>
<UL>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Understanding
	the existing modules of Radiant Systems – POS (Point Of Sale),
	Epsilon, Back End servers and Their dependencies</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Created
	the e-commerce modules with MySQL and PHP.  </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Code
	HTML pages from designs for corporate clients utilizing HTML4, CSS
	and JavaScript. </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Prepare
	and optimize images for the web. </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Develop
	web applications to solve problems </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Provide
	estimates and plan task</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Develop
	of web applications using PHP/Zend Framework for back end solutions </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Database
	design with MySQL </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Programming
	of websites using HTML/CSS, PHP, MySQL and JQuery</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Mentor
	and lead developers by providing guidance on design, implementation,
	and best practices</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Interacted
	with other Teams (Entertainment, Hospitality) to Finalize and
	stabilize the design of the Modules </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Designed
	the Front End Modules and Back End Modules </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Setup
	robust web analytics for web site and customer communications</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Deploy
	builds to various testing environments</FONT></FONT></FONT></FONT></P>
</UL>
<P STYLE="margin-bottom: 0.14in"><BR><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Calibri, serif">Epslon
Technologies Pvt .Ltd.</FONT><FONT FACE="Calibri, serif">
      	    Oct 2002 - Dec 2005</FONT></P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%; page-break-after: avoid">
<FONT FACE="Tahoma, serif"><FONT SIZE=3><B><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Clients:</FONT></FONT></B><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN STYLE="font-weight: normal">
America Online (aol.com),  IBM</SPAN></FONT></FONT><B><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">
                 </FONT></FONT></B></FONT></FONT>
</P>
<P ALIGN=JUSTIFY STYLE="margin-top: 0.17in; margin-bottom: 0.17in; line-height: 100%; page-break-after: avoid">
<IMG SRC="i_a53c53502a8a46eb_html_eae231b0.gif" ALIGN=LEFT><BR><BR>
</P>
<P STYLE="margin-bottom: 0.14in"><FONT FACE="Calibri, serif">Worked
with client America Online Inc. (NYSE: AOL) is a brand company,
committed to continuously innovating, growing, and investing in
brands and experiences that inform, entertain, and connect the world.
AOL creates original content that engages audiences on a local and
global scale. Help marketers connect with these audiences through
effective and engaging digital advertising solutions. Also for the
client, International Business Machines Corporation (IBM) and
developed the TPC Benchmark which is an On-Line Transaction
Processing (OLTP) workload software. </FONT><FONT FACE="Calibri, serif"><B>
 </B></FONT>
</P>
<UL>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Code
	for multiple simultaneous asynchronous requests for a live web
	application. </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Build
	graphs with the NVD3 library. </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Code
	HTML pages from designs for corporate clients utilizing HTML4, CSS
	and JavaScript. </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Prepare
	and optimize images for the web. </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Develop
	web applications to solve problems </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Provide
	estimates and plan task</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Deploy
	builds to various testing environments </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Perform
	estimates for new features/tasks </FONT></FONT></FONT></FONT>
	</P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Interacted
	with cross-functional groups including product manager, customer
	support and sales to develop new functionality and support existing
	customers and existing software</FONT></FONT></FONT></FONT></P>
	<LI><P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt">Developed
	the core modules in C and C++</FONT></FONT></FONT></FONT></P>
</UL>
<P STYLE="margin-left: 0.75in; margin-bottom: 0in; line-height: 100%">
<BR>
</P>
<P STYLE="margin-right: -0.12in; background: #e5e5e5; border-top: none; border-bottom: 1px solid #00000a; border-left: none; border-right: none; padding-top: 0in; padding-bottom: 0.03in; padding-left: 0in; padding-right: 0in; line-height: 100%">
<FONT COLOR="#000080"><B><FONT FACE="Calibri, serif">Education
Qualification</FONT></B></FONT></P>
<UL>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Calibri, serif"><B>B.C.A(Bachelor
	of Computer Applications) </B></FONT><FONT FACE="Calibri, serif">
	from </FONT><FONT FACE="Calibri, serif"><B>KAKATIYA UNIVERSITY</B></FONT><FONT FACE="Calibri, serif">
	with 73% in the year 2002</FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Calibri, serif"><B>Post
	Graduate Diploma in Computing from Unitec, Auckland</B></FONT><FONT FACE="Calibri, serif">
	in the year Feb. 2013 – Nov. 2013 </FONT>
	</P>
</UL>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-right: -0.12in; background: #e5e5e5; border-top: none; border-bottom: 1px solid #00000a; border-left: none; border-right: none; padding-top: 0in; padding-bottom: 0.03in; padding-left: 0in; padding-right: 0in; line-height: 100%">
<FONT COLOR="#000080"><B><FONT FACE="Calibri, serif">Technical
Skills	</FONT></B></FONT></P>
<UL>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#000000"><FONT FACE="Calibri, serif">Java
	Script,  HTML, DHTML, CSS, Ajax, Jquery, Ext JS</FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Calibri, serif">Bea
	Weblogic Server 10.3, JBoss Application Server 4.x/5.x, WebSphere
	6.x/7.x, Apache Tomcat 5.x,6.x, 7.x, Jetty Server&nbsp;</FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#000000"><FONT FACE="Calibri, serif">PHP,
	CodeIgniter, </FONT></FONT><FONT FACE="Calibri, serif">Laravel</FONT><FONT COLOR="#000000"><FONT FACE="Calibri, serif">,
	Zend </FONT></FONT>
	</P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#000000"><FONT FACE="Calibri, serif">Web
	services, cloud services, Cloud Products  and highly scalable SaaS
	(Software As A Service)</FONT></FONT></P>
	<LI><P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#000000"><FONT FACE="Calibri, serif">Amazon
	EC2 and OpenStack  </FONT></FONT>
	</P>
</UL>
</BODY>
</HTML>
                    ';
        Log::info("we are in the BetaController::getDoc::sending response");
        return response($content)
            ->header('Content-Type',  "application/vnd.ms-word")
            ->header('Content-Disposition', 'attachment;Filename=document_name.doc');
    }
}
