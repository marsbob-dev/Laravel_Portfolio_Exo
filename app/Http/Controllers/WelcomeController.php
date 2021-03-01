<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutList;
use App\Models\Contact;
use App\Models\ContactList;
use App\Models\Facts;
use App\Models\FactsList;
use App\Models\Footer;
use App\Models\Hero;
use App\Models\InfoNav;
use App\Models\LinkNav;
use App\Models\Portfolio;
use App\Models\PortfolioList;
use App\Models\PortfolioPic;
use App\Models\Resume;
use App\Models\ResumeEducation;
use App\Models\ResumePro;
use App\Models\ResumeSummaries;
use App\Models\Skills;
use App\Models\SkillsList;
use App\Models\SocialNav;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {

            $linkNav=LinkNav::all();
            $socialNav=SocialNav::all();
            $infoNav=InfoNav::all();
            $footer=Footer::all();
            $footerCopyright=explode('/', $footer[0]->copyright);
            $footerDesign=explode('/', $footer[0]->design);
            $hero=Hero::all();
            $about=About::all();
            $aboutList=AboutList::all();
            $facts=Facts::all();
            $factsList=FactsList::all();
            $skills=Skills::all();
            $skillsList=SkillsList::all();
            $resume=Resume::all();
            $resumePro=ResumePro::all();
            $resumeSummaries=ResumeSummaries::all();
            $resumeEducation=ResumeEducation::all();
            $portfolio=Portfolio::all();
            $portfolioList=PortfolioList::all();
            $portfolioPic=PortfolioPic::all();
            $contact=Contact::all();
            $contactList=ContactList::all();

            return view('welcome', compact('linkNav', 'socialNav', 'infoNav', 'footer','footerCopyright', 'footerDesign', 'hero', 'about', 'aboutList', 'facts', 'factsList', 'skills', 'skillsList', 'resume', 'resumePro', 'resumeSummaries', 'resumeEducation', 'portfolio', 'portfolioList', 'portfolioPic', 'contact', 'contactList'));
        }
    }
}
