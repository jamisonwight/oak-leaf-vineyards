/*!
 * Javascript Cookie v1.5.1
 * https://github.com/js-cookie/js-cookie
 *
 * Copyright 2006, 2014 Klaus Hartl
 * Released under the MIT license
 */
(function(factory){var jQuery;if(typeof define==='function'&&define.amd){define(['jquery'],factory);}else if(typeof exports==='object'){try{jQuery=require('jquery');}catch(e){}
module.exports=factory(jQuery);}else{var _OldCookies=window.Cookies;var api=window.Cookies=factory(window.jQuery);api.noConflict=function(){window.Cookies=_OldCookies;return api;};}}(function($){var pluses=/\+/g;function encode(s){return api.raw?s:encodeURIComponent(s);}
function decode(s){return api.raw?s:decodeURIComponent(s);}
function stringifyCookieValue(value){return encode(api.json?JSON.stringify(value):String(value));}
function parseCookieValue(s){if(s.indexOf('"')===0){s=s.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,'\\');}
try{s=decodeURIComponent(s.replace(pluses,' '));return api.json?JSON.parse(s):s;}catch(e){}}
function read(s,converter){var value=api.raw?s:parseCookieValue(s);return isFunction(converter)?converter(value):value;}
function extend(){var key,options;var i=0;var result={};for(;i<arguments.length;i++){options=arguments[i];for(key in options){result[key]=options[key];}}
return result;}
function isFunction(obj){return Object.prototype.toString.call(obj)==='[object Function]';}
var api=function(key,value,options){if(arguments.length>1&&!isFunction(value)){options=extend(api.defaults,options);if(typeof options.expires==='number'){var days=options.expires,t=options.expires=new Date();t.setMilliseconds(t.getMilliseconds()+days*864e+5);}
return(document.cookie=[encode(key),'=',stringifyCookieValue(value),options.expires?'; expires='+options.expires.toUTCString():'',options.path?'; path='+options.path:'',options.domain?'; domain='+options.domain:'',options.secure?'; secure':''].join(''));}
var result=key?undefined:{},cookies=document.cookie?document.cookie.split('; '):[],i=0,l=cookies.length;for(;i<l;i++){var parts=cookies[i].split('='),name=decode(parts.shift()),cookie=parts.join('=');if(key===name){result=read(cookie,value);break;}
if(!key&&(cookie=read(cookie))!==undefined){result[name]=cookie;}}
return result;};api.get=api.set=api;api.defaults={};api.remove=function(key,options){api(key,'',extend(options,{expires:-1}));return!api(key);};if($){$.cookie=api;$.removeCookie=api.remove;}
return api;}));




// UNCOMMENT FOR SITES NOT BUILT WITH COMPILED JAVASCRIPT
var objectPollyScript = document.createElement('script');
objectPollyScript.type = 'text/javascript';
objectPollyScript.src = 'https://unpkg.com/es7-object-polyfill';
document.getElementsByTagName('head')[0].appendChild(objectPollyScript);
jQuery(function($) {
$(document).ready(function () {
    $('.wpcf7').animate({
        opacity: 1
    }, 1500);

    if ($('.wpcf7-form').length) {
        var canada;
        var unitedStates;

        (function () {

            var getStates = function getStates() {
                // Check initial country Value
                if ($('#country').val() == 'US') {
                    Object.values(unitedStates).forEach(function (state) {
                        $('#state').append('<option value="' + state.abbreviation + '">' + state.name + '</option>');
                    });
                }
                if ($('#country').val() == 'Canada') {
                    Object.values(canada).forEach(function (state) {
                        $('#state').append('<option value="' + state.abbreviation + '">' + state.name + '</option>');
                    });
                }
                if ($('#country').val() == 'Other') {
                }
            };

            // Initiate Country check


            // Clear all state option fields
            var refreshStates = function refreshStates() {
                $('#state option').each(function (index, obj) {
                    $(obj).remove();
                });
            };

            // Watch for country select change


            canada = {
                alberta: {
                    name: 'Alberta',
                    abbreviation: 'AB'
                },
                britishColumbia: {
                    name: 'British Columbia',
                    abbreviation: 'BC'
                },
                manitoba: {
                    name: 'Manitoba',
                    abbreviation: 'MB'
                },
                newBrunswick: {
                    name: 'New Brunswick',
                    abbreviation: 'NB'
                },
                newfoundlandAndLabrador: {
                    name: 'Newfoundland and Labrator',
                    abbreviation: 'NL'
                },
                northwestTerritories: {
                    name: 'Northwest Territories',
                    abbreviation: 'NT'
                },
                novaScotia: {
                    name: 'Nova Scotia',
                    abbreviation: 'NS'
                },
                nunavut: {
                    name: 'Nunavut',
                    abbreviation: 'NU'
                },
                ontario: {
                    name: 'Ontario',
                    abbreviation: 'ON'
                },
                princeEdwardIsland: {
                    name: 'Prince Edward Island',
                    abbreviation: 'PE'
                },
                quebec: {
                    name: 'Quebec',
                    abbreviation: 'QC'
                },
                saskatchewan: {
                    name: 'Saskatchewan',
                    abbreviation: 'SK'
                },
                yukon: {
                    name: 'Yukon',
                    abbreviation: 'YT'
                }
            };
                        unitedStates = {
                alabama: {
                    name: 'Alabama',
                    abbreviation: 'AL'
                },
                alaska: {
                    name: 'Alaska',
                    abbreviation: 'AK'
                },
                arizona: {
                    name: 'Arizona',
                    abbreviation: 'AZ'
                },
                arkansas: {
                    name: 'Arkansas',
                    abbreviation: 'AR'
                },
                california: {
                    name: 'California',
                    abbreviation: 'CA'
                },
                colorado: {
                    name: 'Colorado',
                    abbreviation: 'CO'
                },
                connecticut: {
                    name: 'Connecticut',
                    abbreviation: 'CT'
                },
                deleware: {
                    name: 'Delaware',
                    abbreviation: 'DE'
                },
                districtOfColumbia: {
                    name: 'District of Columbia',
                    abbreviation: 'DC'
                },
                florida: {
                    name: 'Florida',
                    abbreviation: 'FL'
                },
                georgia: {
                    name: 'Georgia',
                    abbreviation: 'GA'
                },
                hawaii: {
                    name: 'Hawaii',
                    abbreviation: 'HI'
                },
                idaho: {
                    name: 'Idaho',
                    abbreviation: 'ID'
                },
                illinios: {
                    name: 'Illinois',
                    abbreviation: 'IL'
                },
                indiana: {
                    name: 'Indiana',
                    abbreviation: 'IN'
                },
                iowa: {
                    name: 'Iowa',
                    abbreviation: 'IA'
                },
                kansas: {
                    name: 'Kansas',
                    abbreviation: 'KS'
                },
                kentucky: {
                    name: 'Kentucky',
                    abbreviation: 'KY'
                },
                louisiana: {
                    name: 'Louisiana',
                    abbreviation: 'LA'
                },
                maine: {
                    name: 'Maine',
                    abbreviation: 'ME'
                },
                maryland: {
                    name: 'Maryland',
                    abbreviation: 'MD'
                },
                massachusetts: {
                    name: 'Massachusetts',
                    abbreviation: 'MA'
                },
                michigan: {
                    name: 'Michigan',
                    abbreviation: 'MI'
                },
                minnesota: {
                    name: 'Minnesota',
                    abbreviation: 'MN'
                },
                mississippi: {
                    name: 'Mississippi',
                    abbreviation: 'MS'
                },
                missouri: {
                    name: 'Missouri',
                    abbreviation: 'MO'
                },
                montana: {
                    name: 'Montana',
                    abbreviation: 'MT'
                },
                nebraska: {
                    name: 'Nebraska',
                    abbreviation: 'NE'
                },
                nevada: {
                    name: 'Nevada',
                    abbreviation: 'NV'
                },
                newHampshire: {
                    name: 'New Hampshire',
                    abbreviation: 'NH'
                },
                newJersey: {
                    name: 'New Jersey',
                    abbreviation: 'NJ'
                },
                newMexico: {
                    name: 'New Mexico',
                    abbreviation: 'NM'
                },
                newYork: {
                    name: 'New York',
                    abbreviation: 'NY'
                },
                northCarolina: {
                    name: 'North Carolina',
                    abbreviation: 'NC'
                },
                northDakota: {
                    name: 'North Dakota',
                    abbreviation: 'ND'
                },
                ohio: {
                    name: 'Ohio',
                    abbreviation: 'OH'
                },
                oklahoma: {
                    name: 'Oklahoma',
                    abbreviation: 'OK'
                },
                oregon: {
                    name: 'Oregon',
                    abbreviation: 'OR'
                },
                pennsylvania: {
                    name: 'Pennsylvania',
                    abbreviation: 'PA'
                },
                rhodeIsland: {
                    name: 'Rhode Island',
                    abbreviation: 'RI'
                },
                southCarolina: {
                    name: 'South Carolina',
                    abbreviation: 'SC'
                },
                southDakota: {
                    name: 'South Dakota',
                    abbreviation: 'SD'
                },
                tennessee: {
                    name: 'Tennessee',
                    abbreviation: 'TN'
                },
                texas: {
                    name: 'Texas',
                    abbreviation: 'TX'
                },
                utah: {
                    name: 'Utah',
                    abbreviation: 'UT'
                },
                vermont: {
                    name: 'Vermont',
                    abbreviation: 'VT'
                },
                virginia: {
                    name: 'Virginia',
                    abbreviation: 'VA'
                },
                washington: {
                    name: 'Washington',
                    abbreviation: 'WA'
                },
                westVirginia: {
                    name: 'West Virginia',
                    abbreviation: 'WV'
                },
                wisconsin: {
                    name: 'Wisconsin',
                    abbreviation: 'WI'
                },
                wyoming: {
                    name: 'Wyoming',
                    abbreviation: 'WY'
                }
            };
            getStates();$('#country').on('change', function (e) {
                e.preventDefault();
                refreshStates();
                getStates();
            });
        })();
    }
});
});