<INCLUDE_TYPOSCRIPT: source="DIR:EXT:dominion/Configuration/TypoScript" extensions="ts">

page = PAGE
page {
	typeNum = 0
	10 = FLUIDTEMPLATE
	10 {
		templateName = TEXT
		templateName.stdWrap.cObject = CASE
		templateName.stdWrap.cObject {
			key.data = pageLayout
			
			default = TEXT
			default.value = Default
		}
		
		templateRootPaths {
			0 = EXT:dominion/Resources/Private/Templates/Page/
		}
		layoutRootPaths {
			0 = EXT:dominion/Resources/Private/Layouts/Page/
		}
		partialRootPaths {
			0 = EXT:dominion/Resources/Private/Partials/Page/
		}
		
	}
	includeCSS {
		file1 = EXT:dominion/Resources/Public/Css/bootstrap.min.css		
	}
	javascriptLibs {
		jQuery = 1
		jQuery.version = latest		
	}	
	
}
