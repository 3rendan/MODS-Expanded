<?php
// Digital Commonwealth/ BPL profile MODS, adapted to flat representation in Omeka
$elements = array(
    array(
    'name'=>'File name',
    ),
    array(
        'name'=>'File path',
        ),
    array(
        'name'=>'File datastream',
        ),
    array(
        'name'=>'Local accession',
        ),
    array(
        'name'=>'Other local identifier',
        ),
    array(
        'name'=>'Other local identifier: Invalid ',
        ),
    array(
        'name'=>'Local call number',
        ),
    array(
        'name'=>'Local call number: Invalid',
        ),
    array(
        'name'=>'Local barcode',
        ),
    array(
        'name'=>'Local barcode: Invalid ',
        ),
    array(
        'name'=>'ISBN (International Standard Book Number)',
        ),
    array(
        'name'=>'ISMN (International Standard Music Number)',
        ),
    array(
        'name'=>'ISRC (International Standard Recording Code)',
        ),
    array(
        'name'=>'ISSN (International Standard Serial Number)',
        ),
    array(
        'name'=>'Sound recording issue number',
        ),
    array(
        'name'=>'LCCN (Library of Congress Control Number)',
        ),
    array(
        'name'=>'Sound recording matrix number',
        ),
    array(
        'name'=>'Publisher&apos;s music plate number',
        ),
    array(
        'name'=>'Publisher-assigned music number',
        ),
    array(
        'name'=>'SICI (Serial Item and Contribution Identifier)',
        ),
    array(
        'name'=>'Publisher-assigned videorecording number',
        ),
    array(
        'name'=>'Primary title',
        'description'=>'This is used for the primary title for indexing and display. If the object includes parallel titles, leave this field blank and use "Parallel titles" instead. The values in "Parallel titles" will then be used as primary titles.'
        ),
    array(
        'name'=>'Primary title is Cataloger-Created',
        'description'=> 'Mark the primary title as "cataloger-created" if it is supplied by cataloger -- that is, NOT transcribed from the object or material accompanying the object. To mark the title as "cataloger-created," place an "x" in the spreadsheet.'
        ),
    array(
        'name'=>'Language of primary title',
        'description'=>'"If the primary title is NOT in English, include the language of the title here. Language should be represented using language codes selected from ISO639-2 Codes for the Representation of Names of Languages - Part 2: Alpha-3 Code for the Names of Languages. Language codes can be found here: http://id.loc.gov/vocabulary/iso639-2.html"'
        ),
    array(
        'name'=>'Parallel titles',
        'description'=>'Use for parallel titles (that is, equivalent titles in different languages).'
        ),
    array(
        'name'=>'Language of parallel titles',
        'description'=>'Include the languages of the parallel titles here. Languages should be represented using language codes selected from ISO639-2 Codes for the Representation of Names of Languages - Part 2: Alpha-3 Code for the Names of Languages. Language codes can be found here: http://id.loc.gov/vocabulary/iso639-2.html'
        ),
    array(
        'name'=>'Alternative title',
        'description'=>''
        ),
    array(
        'name'=>'Alternative title is Cataloger-Created',
        'description'=>'Mark the alternative title as "cataloger-created" if it is supplied by cataloger -- that is, NOT transcribed from the object or material accompanying the object. To mark the alternative title as "cataloger-created," place an "x" in the spreadsheet.'
        ),
    array(
        'name'=>'Translated title',
        'description'=>'Use ONLY for titles that have been translated from the original language into another language.'
        ),
    array(
        'name'=>'Language of translated title ',
        'description'=>'Include the language into which the title has been translated here. Language should be represented using language codes selected from ISO639-2 Codes for the Representation of Names of Languages - Part 2: Alpha-3 Code for the Names of Languages. Language codes can be found here: http://id.loc.gov/vocabulary/iso639-2.html'
        ),
    array(
        'name'=>'Uniform title',
        'description'=>'Uniform titles should come from an authorized source (such as Library of Congress Name Authority File) or they can be created locally.'
        ),
    array(
        'name'=>'Uniform title authority',
        'description'=>'Uniform titles should come from an authorized source, which necessitates use of @authority and @authorityURI (if applicable).'
        ),
    array(
        'name'=>'Uniform title: Value URI',
        'description'=>''
        ),
    array(
        'name'=>'Other title information',
        'description'=>'Use for subtitles or any other information considered part of the title but not appropriate for inclusion in the "Primary title".'
        ),
    array(
        'name'=>'Statement of responsibility ',
        'description'=>'Use this field to record the names of persons and/or corporate bodies having contributed to the creative and intellectual content of the object being described. Information recorded here can be used to select (or create) an AUTHORIZED name heading for the ""Name"" field.'
        ),
    array(
        'name'=>'Name',
        'description'=>'"Use this field to enter a controlled name heading for persons and/or corporate bodies having contributed to the creative and intellectual content of the object being described. Name headings should come from an AUTHORIZED source (such as Library of Congress Name Authority File) or they can be created locally. Non-authorized or transcribed names should NOT be entered in this field. Corporate & Personal names need to be parsed into their subunits. The split should be part of the developers\' scripts. '
        ),
    array(
        'name'=>'Name: Type',
        'description'=>'Allowed types for "Name": personal, corporate, conference, family'
        ),
    array(
        'name'=>'Name: Authority',
        'description'=>'Names should come from an authorized source (such as Library of Congress Name Authority File), which would necessitate use of @authority and @authorityURI. Alternatively, authorized name forms can be created locally, which would necessitate use of AT LEAST @authority.'
        ),
    array(
        'name'=>'Name: Value URI',
        'description'=>'Link to authority source for name. Ex. Library of Congress Name Authority URL'
        ),
    array(
        'name'=>'Affiliation',
        'description'=>''
        ),
    array(
        'name'=>'Role',
        'description'=>'"Select roles ONLY from the MARC Code List for Relators at http://id.loc.gov/vocabulary/relators.html / authorityURI=""iso639-2b"" authorityURI=""http://id.loc.gov/vocabulary/relators""

If a single name requires multiple roles, use {|} to separate the roles. For example, for a single name with two roles the corresponding role values would look like: [name] \ [role]{|}[role] or two names (the first with multiple roles), the corresponding role values would look like: [name]||[name] \ [role]{|}[role]||[role]"'
        ),
    array(
        'name'=>'Role: Value URI',
        'description'=>'"Select roles ONLY from the MARC Code List for Relators at http://id.loc.gov/vocabulary/relators.html / authorityURI=""iso639-2b"" authorityURI=""http://id.loc.gov/vocabulary/relators""If a single name requires multiple role value URIs, use {|} to separate the URIs. For example, for a single name with two roles value URIs the corresponding URI values would look like: [name] \ [role URI]{|}[role URI] For two names (the first with multiple roles value URIs), the corresponding URI values would look like: [name]||[name] \ [role URI]{|}[role URI]||[role URI]"'
        ),
    array(
        'name'=>'Type of resource',
        'description'=>'The ONLY allowed terms (from http://www.loc.gov/standards/mods/userguide/typeofresource.html): text, cartographic, notated music, sound recording, sound recording-musical, sound recording-nonmusical, still image, moving image, three dimensional object,
software, multimedia, mixed material'
        ),
    array(
        'name'=>'Type of resource: Manuscript',
        'description'=>'If the object is manuscript, place an "x" in the spreadsheet.'
        ),
    array(
        'name'=>'BASIC genre/form',
        'description'=>'Allowed BASIC genre/form authority values (from TGM): gmgpc, lctgm. The ONLY allowed terms: Albums [display = “Albums/Scrapbooks” / authority = gmgpc], Books [display = “Books” / authority = gmgpc], Cards [display = “Postcards/Cards” / authority = gmgpc], Correspondence [display = “Letters/Correspondence” / authority = lctgm], Documents [display = “Documents (other)” / authority = gmgpc], Drawings [display = “Drawings/Illustrations” / authority = gmgpc], Ephemera [display = “Ephemera” / authority = gmgpc], Manuscripts [display = “Manuscripts” / authority = gmgpc], Maps [display = “Maps/Atlases” / authority = gmgpc], Motion pictures [display = “Film/Video” / authority = lctgm], Music [display = “Music (recordings)” / authority = lctgm], Musical notation [display = “Sheet music” / authority = lctgm], Newspapers [display = “Newspapers” / authority = lctgm], Objects [display = “Objects/Artifacts” / authority = lctgm], Paintings [display = “Paintings” / authority = gmgpc], Periodicals [display = “Periodicals” / authority = gmgpc], Photographs [display = “Photographs” / authority = gmgpc], Posters [display = “Posters” / authority = gmgpc], Prints [display = “Prints (other)” / authority = gmgpc], Sound recordings [display = “Audio recordings (nonmusical)” / authority = lctgm]"'
        ),
    array(
        'name'=>'BASIC genre/form: Value URI',
        'description'=>'"Developers may auto populate values based on list of 20 allowable terms. However, for now, enter URIs into the spreadsheet as required. URIs come from TGM: http://id.loc.gov/vocabulary/graphicMaterials.html"'
        ),
    array(
        'name'=>'SPECIFIC TGM genre/form',
        'description'=>''
        ),
    array(
        'name'=>'SPECIFIC TGM genre/form: Value URI',
        'description'=>''
        ),
    array(
        'name'=>'Other SPECIFIC genre/form',
        'description'=>'Use for other genre/form terms that come from any other CONTROLLED VOCABULARY, including a locally created vocabulary. Authority code values come from Subject Heading and Term Source Codes and can be found here: http://www.loc.gov/standards/sourcelist/subject.html'
        ),
    array(
        'name'=>'Other SPECIFIC genre/form: Authority',
        'description'=>'Specific genre/form terms should be chosen from an authorized vocabulary, which would necessitate use of @authority and @authorityURI.'
        ),
    array(
        'name'=>'Other SPECIFIC genre/form: Value URI',
        'description'=>''
        ),
    array(
        'name'=>'Origin event type',
        'description'=>'Allowed event types: production, publication, distribution, manufacture'
        ),
    array(
        'name'=>'Place of publication',
        'description'=>''
        ),
    array(
        'name'=>'Publisher',
        'description'=>''
        ),
    array(
        'name'=>'Date type',
        'description'=>'Allowed date types: dateIssued, dateCreated, copyrightDate'
        ),
    array(
        'name'=>'Date (single date)',
        'description'=>'Use for single dates. / Record as YYYY-MM-DD (w3cdtf encoding)'
        ),
    array(
        'name'=>'Date range: Start',
        'description'=>'Use for start date of date range. / Record as YYYY-MM-DD (w3cdtf encoding)'
        ),
    array(
        'name'=>'Date range: End',
        'description'=>'Use for end date of date range. / Record as YYYY-MM-DD (w3cdtf encoding)'
        ),
    array(
        'name'=>'Date qualifier',
        'description'=>'Allowed date qualifiers: approximate, inferred, questionable'
        ),
    array(
        'name'=>'Edition',
        'description'=>''
        ),
    array(
        'name'=>'Language',
        'description'=>'Language terms should be selected from ISO639-2 Codes for the Representation of Names of Languages - Part 2: Alpha-3 Code for the Names of Languages / authorityURI="iso639-2b" authorityURI="http://id.loc.gov/vocabulary/iso639-2'
        ),
    array(
        'name'=>'Language code',
        'description'=>'Enter the language code selected from ISO639-2 Codes for the Representation of Names of Languages - Part 2: Alpha-3 Code for the Names of Languages here. Populate the end of the @valueURI with the corresponding term code selected from ISO639-2.'
        ),
    array(
        'name'=>'Physical description',
        'description'=>''
        ),
    array(
        'name'=>'Physical description note',
        'description'=>''
        ),
    array(
        'name'=>'Digital origin',
        'description'=>'Allowed digital origin values: born digital, reformatted digital, digitized microfilm, digitized other analog'
        ),
    array(
        'name'=>'Summary/Abstract',
        'description'=>''
        ),
    array(
        'name'=>'Table of contents',
        'description'=>''
        ),
    array(
        'name'=>'Table of contents link',
        'description'=>'The @xlink:href attribute may be used to provide a link to an external table of contents.'
        ),
    array(
        'name'=>'GENERAL note(s)',
        'description'=>'Note(s) that cannot be classified using one of the more specific note types.'
        ),
    array(
        'name'=>'Date note(s)',
        'description'=>'Note(s) about the date of creation, capture, recording, filming, execution, or broadcast associated with the object being described.'
        ),
    array(
        'name'=>'Language note(s)',
        'description'=>'A note about the textual information on the language or notation system used to convey the content of the described objects.'
        ),
    array(
        'name'=>'Acquisition note(s)',
        'description'=>'A note concerning the immediate source of acquisition of the described objects.'
        ),
    array(
        'name'=>'Ownership note(s)',
        'description'=>'A note concerning the ownership and custodial history of the described objects from the time of their creation to the time of their accessioning.'
        ),
    array(
        'name'=>'Funding note(s)',
        'description'=>'A note concerning the funding of the creation of the object being described.'
        ),
    array(
        'name'=>'Biographical/historical note(s)',
        'description'=>'A note concerning biographical or historical information about an individual, institution, or other entity present in or involved with the creation of the object being described.'
        ),
    array(
        'name'=>'Citation/reference note(s)',
        'description'=>'Note(s) about citations or references to published bibliographic descriptions, reviews, abstracts, or indexes of the content of the described object.'
        ),
    array(
        'name'=>'Preferred citation note(s)',
        'description'=>'Note concerning the format for the citation of the described objects that is preferred by the custodian.'
        ),
    array(
        'name'=>'Bibliography note(s)',
        'description'=>'Note(s) concerning information on the presence of one or more bibliographies and/or other bibliographic references in the described object or accompanying material.'
        ),
    array(
        'name'=>'Exhibitions note(s)',
        'description'=>'Note(s) that cite exhibitions where the object described has been shown.'
        ),
    array(
        'name'=>'Publication note(s)',
        'description'=>'Note(s) for citations or information about a publication that is based on the use, study, or analysis of the objects described in the record. Can also be used to record citations to published sources that contain photocopies or reproductions of objects.'
        ),
    array(
        'name'=>'Creation/production credits note(s)',
        'description'=>'Note(s) concering credits for persons or organizations, other than cast, who have participated in the creation and/or production of the work. '
        ),
    array(
        'name'=>'Performers note(s)',
        'description'=>'Note(s) concening information about the participants, players, narrators, presenters, or performers (the cast).'
        ),
    array(
        'name'=>'Venue note(s)',
        'description'=>'Note(s) about the place of creation, capture, recording, filming, execution, or broadcast associated with the object being described.'
        ),
    array(
        'name'=>'Arrangement note(s)',
        'description'=>'Note(s) about the manner in which the described materials are subdivided into smaller units, such as how record groups are divided into series and series into subseries.'
        ),
    array(
        'name'=>'TGM headings (topic)',
        'description'=>'Use ONLY for values the come from Thesaurus for Graphic Materials (TGM) / authority="lctgm" / authorityURI="http://id.loc.gov/vocabulary/graphicMaterials'
        ),
    array(
        'name'=>'TGM headings (topic): Value URI',
        'description'=>''
        ),
    array(
        'name'=>'LCSH (topic)',
        'description'=>'Use ONLY for values the come from Library of Congress Subject Headings (LCSH) / authority="lcsh" / authorityURI="http://id.loc.gov/authorities/subjects'
        ),
    array(
        'name'=>'LCSH (topic): Value URI',
        'description'=>''
        ),
    array(
        'name'=>'Other topical headings',
        'description'=>'Use for topical terms that come from any other CONTROLLED VOCABULARY, including a locally created vocabulary.'
        ),
    array(
        'name'=>'Other topical headings: Authority',
        'description'=>'Use for topical terms that come from any other CONTROLLED VOCABULARY, including a locally created vocabulary. Authority code values come from Subject Heading and Term Source Codes and can be found here: http://www.loc.gov/standards/sourcelist/subject.html'
        ),
    array(
        'name'=>'Other topical headings: Value URI',
        'description'=>''
        ),
    array(
        'name'=>'Uncontrolled keywords',
        'description'=>'Use for keywords or tags that DO NOT come from any controlled vocabulary. If the terms come from a locally created vocabulary, use "Other topical headings.'
        ),
    array(
        'name'=>'Proper name subject',
        'description'=>'Corporate & Personal name subjects need to be parsed into their subunits. The split should be part of the developers\' scripts.'
        ),
    array(
        'name'=>'Proper name subject: Type',
        'description'=>'Allowed types for "Proper name subject": personal, corporate, conference, family'
        ),
    array(
        'name'=>'Proper name subject: Authority',
        'description'=>'Proper name subjects should come from an authorized source (such as Library of Congress Name Authority File), which would necessitate use of @authority and @authorityURI. Alternatively, authorized forms of proper name subjects can be created locally, which would necessitate use of AT LEAST @authority. Authority code values come from Subject Heading and Term Source Codes and can be found here: http://www.loc.gov/standards/sourcelist/subject.html'
        ),
    array(
        'name'=>'Proper name subject: Value URI',
        'description'=>''
        ),
    array(
        'name'=>'TGN ID (hierarchical geographic)',
        'description'=>'Use ONLY for values the come from Getty Thesaurus of Geographic Names (TGN), which can be found here: http://www.getty.edu/research/tools/vocabularies/tgn/index.html. Developers should use the numeric TGN ID code to display the hierarchical geographics when deployed in the system. In MODS, TGN ID will be placed in @valueURI inside <mods:subject>"'
        ),
    array(
        'name'=>'GeoNames',
        'description'=>'Use ONLY for values that come from the GeoNames geographic database, which can be found here: http://www.geonames.org/. Developers should use the numeric GeoNames ID code to display ONLY the last value in the location hierarchy when deployed in the system. In MODS, GeoNames ID will be placed in @valueURI AFTER ""http://sws.geonames.org/"" inside <mods:subject>'
        ),
    array(
        'name'=>'LC Geographics',
        'description'=>'If "names" in valueURI, authority = NAF, authorityURI = http://id.loc.gov/authorities/names / If "subjects" in valueURI, authority = LCSH, authorityURI = http://id.loc.gov/authorities/subjects'
        ),
    array(
        'name'=>'LC Geographics: Value URI',
        'description'=>'If "names" in valueURI, authority = NAF, authorityURI = http://id.loc.gov/authorities/names / If "subjects" in valueURI, authority = LCSH, authorityURI = http://id.loc.gov/authorities/subjects'
        ),
    array(
        'name'=>'Other geographic headings',
        'description'=>'Use for geographic terms that come from any other CONTROLLED VOCABULARY, even a locally created vocabulary.'
        ),
    array(
        'name'=>'Other geographic headings: Authority',
        'description'=>'Use for geographic terms that come from any other CONTROLLED VOCABULARY, even a locally created vocabulary. Authority code values come from Subject Heading and Term Source Codes and can be found here: http://www.loc.gov/standards/sourcelist/subject.html'
        ),
    array(
        'name'=>'Other geographic headings: Value URI',
        'description'=>''
        ),
    array(
        'name'=>'Cartographic coordinates',
        'description'=>'Use for latitude/longitude coordinates for geo-location.'
        ),
    array(
        'name'=>'Cartographic coordinates label',
        'description'=>'Use to provide a human-readable label for the value provided in "Cartographic coordinates." In this case, no @authority is necessary.'
        ),
    array(
        'name'=>'Cartographic scale',
        'description'=>''
        ),
    array(
        'name'=>'Cartographic projection',
        'description'=>''
        ),
    array(
        'name'=>'Uniform title subject',
        'description'=>'Uniform titles used as subject terms should come from an authorized source (such as Library of Congress Name Authority File) or they can be created locally.'
        ),
    array(
        'name'=>'Uniform title subject: Authority',
        'description'=>'Uniform titles used as subject terms should come from an authorized source, which necessitates use of @authority and @authorityURI (if applicable).'
        ),
    array(
        'name'=>'Uniform title subject: Value URI',
        'description'=>''
        ),
    array(
        'name'=>'Temporal subject: Single date',
        'description'=>'Use ONLY when the object being described portrays a subject whose temporal orientation is significantly different from the year in which the original object was created. Use for single dates. / Record as YYYY-MM-DD (w3cdtf encoding) / If subject type used, all date-related columns should always be included in a data entry form.'
        ),
    array(
        'name'=>'Temporal subject: Start date',
        'description'=>'Use ONLY when the object being described portrays a subject whose temporal orientation is significantly different from the year in which the original object was created. Use for start date of date range. / Record as YYYY-MM-DD (w3cdtf encoding) / If subject type used, all date-related columns should always be included in a data entry form.'
        ),
    array(
        'name'=>'Temporal subject: End date',
        'description'=>'Use ONLY when the object being described portrays a subject whose temporal orientation is significantly different from the year in which the original object was created. Use for end date of date range. / Record as YYYY-MM-DD (w3cdtf encoding) / If subject type used, all date-related columns should always be included in a data entry form.'
        ),
    array(
        'name'=>'Host collection',
        'description'=>'Information concerning the host or parent for the object described; this may be a parent collection. This element should be used to name the PHYSICAL collection in which the object resides (NOT a digitally created collection that includes objects from multiple physical collections).'
        ),
    array(
        'name'=>'Subcollection',
        'description'=>'Information about sub-units of a host collection.'
        ),
    array(
        'name'=>'Constituent',
        'description'=>'Information concerning a constituent unit of the object This allows for more specific parsed information than may be used in <tableOfContents>.'
        ),
    array(
        'name'=>'Series',
        'description'=>'Information concerning the series in which an object is issued.'
        ),
    array(
        'name'=>'Subseries',
        'description'=>'Information concerning the subseries in which an object is issued.'
        ),
    array(
        'name'=>'Sub-subseries',
        'description'=>'Information concerning the sub-subseries in which an object is issued.'
        ),
    array(
        'name'=>'Sub-sub-subseries',
        'description'=>'Information concerning the sub-sub-subseries in which an object is issued.'
        ),
    array(
        'name'=>'Other format',
        'description'=>'Use for information concerning another format of the object (that is, a change in physical format).'
        ),
    array(
        'name'=>'Referenced by link',
        'description'=>'Use this to include a link to citations or references to published bibliographic descriptions, reviews, abstracts, or indexes of the content of the object.'
        ),
    array(
        'name'=>'References link',
        'description'=>'Use this to include a link to information concerning a resource cited or referred to in the object.'
        ),
    array(
        'name'=>'Review of link',
        'description'=>'Use this to include a link to information concerning a resource reviewed in the content of the object.'
        ),
    array(
        'name'=>'Physical location (library)',
        'description'=>'Use for the name of the institution where the physical object is located. Note that this field should NOT be used for the institution that is submitting the objects for digitization (that is, if a single institution is coordinating digitization for several institutions collectively, the institution that holds the physical objects should be recorded here, NOT the coordinating institution).'
        ),
    array(
        'name'=>'Library department',
        'description'=>'Use for library sublocation, such as department, division, office, section, etc.'
        ),
    array(
        'name'=>'Shelf locator',
        'description'=>'Use for a shelf mark, or other shelving designation, that indicates the location identifier for an object.'
        ),
    array(
        'name'=>'Rights',
        'description'=>'"Used to indicate the rights status of the original object. Enter a free text statement, such as: No known copyright restrictions, Rights status not evaluated, or Under copyright.'
        ),
    array(
        'name'=>'License',
        'description'=>'Used to indicate the license governing the use of the digitized object. Users must select one of the following values:; No known restrictions on use; This work is in the public domain under a Creative Commons No Rights Reserved License (CC0); This work is licensed for use under a Creative Commons Attribution License (CC BY); This work is licensed for use under a Creative Commons Attribution Share Alike License (CC BY-SA); This work is licensed for use under a Creative Commons Attribution No Derivatives License (CC BY-ND); This work is licensed for use under a Creative Commons Attribution Non-Commercial License (CC BY-NC); This work is licensed for use under a Creative Commons Attribution Non-Commercial Share Alike License (CC BY-NC-SA); This work is licensed for use under a Creative Commons Attribution Non-Commercial No Derivatives License (CC BY-NC-ND); All rights reserved; Contact host institution for more information.'
        ),
    array(
        'name'=>'Restriction on access',
        'description'=>'Indicates the information is about restrictions imposed on access to the described digital objects (for example, can only be accessed on-site).'
        ),
    array(
        'name'=>'Description standard',
        'description'=>'"This should be used to designate the rules or content standard used to develop the description (title, physical description, etc.), if applicable.

The ONLY allowed values for this field will come from the Library of Congress Description Convention Source Codes (see http://www.loc.gov/standards/sourcelist/descriptive-conventions.html). Some commonly used standards are: aacr = Anglo-American cataloguing rules; cco = Cataloging cultural objects : a guide to describing cultural works and their images; dacs = Describing archives: a content standard; gihc = Graphic materials: rules for describing original items and historical collections; local = Locally defined or unknown cataloging rules; rda = Resource Description and Access; dcrmg = Descriptive cataloging of rare materials (Graphics); amremm = Descriptive cataloging of ancient, medieval, renaissance, and early-modern manuscripts "'
        ),
    array(
        'name'=>'Flagged for content',
        'description'=>'An item can be flagged if its content could be seen as objectionable to some viewers. To mark an item "flagged for content," place an "x" in the spreadsheet.'
        ),
    array(
        'name'=>'Repository Set Name',
        'description'=>'Whereas the physical "Host collection" (see Row 115) is intended to record the name by which the collection is made available within the walls of an institution, within the repository, the set can be named in whatever way best describes the materials in an online setting. Why would the name of the physical collection be different from the repository set name? In some cases, an institution might include all of its local history materials collectively in a physical "Local History Collection" but prefer the items display by format in the repository (that is, include a separate repository set for photographs, maps, postcards, books, etc.). In other cases, an institution might want all local history materials displayed under a single ""Local History Collection"" with distinct nested series (see Rows 118-121) to indicate such things as photographs, maps, postcards, books, etc. Use this column to indicate the name that should be used to identify the set in the repository. Note that this value can, but does not have to, duplicate the value in "Host collection."'
        ),
);
