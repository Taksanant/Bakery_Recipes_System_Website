// const Save5 = document.querySelector('.save-5');

// document.querySelector('.save-5').addEventListener('click', () => {
//     Save5.classList.toggle('bi-bookmark-fill-click-5');
// });

// const Save6 = document.querySelector('.save-6');

// document.querySelector('.save-6').addEventListener('click', () => {
//     Save6.classList.toggle('bi-bookmark-fill-click-6');
// });

const Favorite1 = document.querySelector('.heart-1');

document.querySelector('.heart-1').addEventListener('click', () => {
    Favorite1.classList.toggle('heart-click-1');
});

const Favorite2 = document.querySelector('.heart-2');

document.querySelector('.heart-2').addEventListener('click', () => {
    Favorite2.classList.toggle('heart-click-2');
});

const Save = document.querySelector('.bi-bookmark-fill');

document.querySelector('.bi-bookmark-fill').addEventListener('click', () => {
    Save.classList.toggle('bi-bookmark-fill-click');
});

function leverJobsInit() {

    /**
    * Variables
    ****************************/
  
    // Location
    var pageUrl = window.location.href;
  
    var pageSize = 10;
    var lastPage;
  
    // Find last segment of URL
    var pathArray = pageUrl.split( '/' );
    var lastSegment = pathArray[pathArray.length-2];
  
    // Set 'team' variable for Lever URL
    function getLeverTeam (pageSlug) {
      var pageTeamMap = {
        'advertising': 'advertising',
        'client-services': 'Client Success&team=Services',
        'finance': 'finance',
        'information-technology': 'it',
        'legal': 'legal',
        'marketing': 'marketing',
        'people-and-talent': 'people and talent',
        'sales': 'sales',
        'research-and-development': 'engineering',
        'default': ''
      };
      return (pageTeamMap[pageSlug] || pageTeamMap['default']);
    }
    var leverTeam = getLeverTeam(lastSegment);
    // Checking for potential Lever source or origin parameters
    var leverParameter = '';
    var trackingPrefix = '?lever-';
  
    // Selectors
    var $jobsLocation = $('.jobs-sort .jobs-locations');
    var $jobsTeam = $('.jobs-sort .jobs-teams');
    var $jobsSort = $('#jobs-container .jobs-sort');
    var $jobsListContainer = $('#jobs-container .jobs-list');
    var $noJobResult = $('#jobs-container .jobs-list .no-job-result');
    var $job = $('#jobs-container .jobs-list .job');
  
    if( pageUrl.indexOf(trackingPrefix) >= 0){
      // Found Lever parameter
      var pageUrlSplit = pageUrl.split(trackingPrefix);
      leverParameter = '?lever-'+pageUrlSplit[1];
    }
  
    /**
    * Functions
    ****************************/
  
    // Functions for checking if the variable is unspecified
    function cleanString(string) {
      if (string) {
        var cleanString = string.replace(/\s+/ig, "");
        return cleanString;
      }
      else {
        return "Uncategorized";
      }
    }
  
    function nullCheck(string) {
      if (!string) {
        return 'Uncategorized';
      }
      else {
        return string;
      }
    }
  
    function renderJobs(_data) {
      // Adding individual job postings
      console.log('renderJobs', _data);
      if (!_data.length){
        $jobsListContainer.html('<p class="no-job-result bg-info">No positions available.</p>');
      } else {
        var jobsList = [];
        for(i = 0; i < _data.length; i++) {
          var posting = _data[i]
          var title = posting.text
          var location = nullCheck(posting.categories.location);
          var locationCleanString = cleanString(location);
          var commitment = nullCheck(posting.categories.commitment);
          var commitmentCleanString = cleanString(commitment);
          var team = nullCheck(posting.categories.team);
          var teamCleanString = cleanString(team);
          var link = posting.hostedUrl+leverParameter;
          var jobPosting = '<a class="job '+teamCleanString+' '+locationCleanString+' '+commitmentCleanString+'" data-location="'+locationCleanString+'" data-team="'+teamCleanString+'" href="'+ link +'"><span class="job-title">'+title+'</span><span class="tag">'+team+'</span><span class="tag">'+location+'</span></a>'
          jobsList.push(jobPosting);
        }
        $jobsListContainer.html(jobsList.join(''));
      }
    } // END createJobs
  
    function renderFilters(_data) {
      console.log('renderFilters');
      // Adding Team values to Team Sort select drop-downs
      var teams = [];
      for(i = 0; i < _data.length; i++) {
        var team = nullCheck(_data[i].categories.team);
        var teamCleanString = cleanString(team);
        var teamOption = '<option class="job-team '+teamCleanString+'">'+team+'</option>';
        // Check for duplicates
        if (teams.indexOf(teamOption) === -1) {
          teams.push(teamOption);
        }
        teams.sort();
      }
      $jobsTeam.append(teams.join(''));
  
      // Adding Location values to Location Sort select drop-downs
      var locations = [];
      for(i = 0; i < _data.length; i++) {
        var location = nullCheck(_data[i].categories.location)
        var locationCleanString = cleanString(location);
        var locationOption = '<option class="job-location '+locationCleanString+'">'+location+'</option>';
        // Check for duplicates
        if (locations.indexOf(locationOption) === -1) {
          locations.push(locationOption);
        }
        locations.sort();
      }
      $jobsLocation.append(locations.join(''))};
  
    function fetchData(options, callback) {
      console.log('fetchData');
      var leverUrl = 'https://api.lever.co/v0/postings/bazaarvoice?mode=json';
      if (options.page) {
        leverUrl += '&limit=' + pageSize + '&skip=' + ((options.page - 1) * pageSize);
        if (!options.noCheckPagination) {
          lastPage = options.page;
        }
      }
      if (options.team) {
        leverUrl += '&team=' + options.team;
      }
      if (options.location) {
        leverUrl += '&location=' + options.location;
      }
      $.ajax({
        dataType: "json",
        url: leverUrl,
        success: function(data){
          if (!options.noCheckPagination && options.page) {
            checkPagination(options);
          }
          callback(data);
        } ,
        error: function() {
          $jobsListContainer.html('<p class="no-job-result bg-info">Content is not available.</p>');
        }
      });
    }
  
    function checkPagination(options) {
      console.log('checkPagination');
      // Prev needs to be disabled on page 1.
      $('.jobs-pagination .prev').attr("disabled", lastPage <= 1);
      options.noCheckPagination = true;
      options.page += 1;
      fetchData(options, function(data) {
        if(!data.length) {
          $('.jobs-pagination .next').attr("disabled", true);
        } else {
          $('.jobs-pagination .next').attr("disabled", false);
        }
      });
    }
  
    // Handlers for pagination buttons
    function prevButton () {
      console.log('prevButton');
      if (!$(this).attr('disabled') && lastPage > 1) {
        getLeverTeam(lastSegment);
        if (leverTeam == '') {
          var teamValue = $jobsTeam.val();
        } else {
          var teamValue = leverTeam;
        }  
        var locationValue = $jobsLocation.val();
        if (teamValue == "All") {
          teamValue = null;
        }
        if (locationValue == "All") {
          locationValue = null;
        }
        $('html, body').animate({
            scrollTop: $("#jobs-container").offset().top - 150
        }, 500);
        fetchData({team:teamValue, location: locationValue, page: lastPage -= 1 }, function(data){
          renderJobs(data);
        });
      }
    }
  
    function nextButton () {
      console.log('nextButton');
      if (!$(this).attr('disabled')) {
        getLeverTeam(lastSegment);
        if (leverTeam == '') {
          var teamValue = $jobsTeam.val();
        } else {
          var teamValue = leverTeam;
        }  
        var locationValue = $jobsLocation.val();
        if (teamValue == "All") {
          teamValue = null;
        }
        if (locationValue == "All") {
          locationValue = null;
        }
        $('html, body').animate({
            scrollTop: $("#jobs-container").offset().top - 150
        }, 500);
        fetchData({team:teamValue, location: locationValue, page: lastPage += 1 }, function(data){
          renderJobs(data);
        });
      }
    }
  
    // === Sorting/Filters job postings triggered from select drop downs (team & location)
    function filterJobs() {
      console.log('filterJobs');
      var teamValue = $jobsTeam.val();
      var locationValue = $jobsLocation.val();
      page = 1;
      if (teamValue == "All") {
        teamValue = null;
      }
      if (locationValue == "All") {
        locationValue = null;
      }
      fetchData({team:teamValue, location: locationValue, page: 1}, function(data){
        renderJobs(data);
      });
    }
  
    // Event Handlers (for pagination btns and drop-down filters)
    $('.jobs-pagination .prev').click(prevButton);
    $('.jobs-pagination .next').click(nextButton);
    $('.jobs-sort select').change(filterJobs);
  
    // Init render filters
    fetchData({}, function(data){
      renderFilters(data);
    });
  
    // Init render jobs
    fetchData({page: 1, team: leverTeam}, function(data){
      renderJobs(data);
    });
  
  } // END leverJobsInit
  
  $(function() {
    leverJobsInit();
  });
  