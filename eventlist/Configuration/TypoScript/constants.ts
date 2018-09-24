
plugin.tx_eventlist_eventlisting {
    view {
        # cat=plugin.tx_eventlist_eventlisting/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:eventlist/Resources/Private/Templates/
        # cat=plugin.tx_eventlist_eventlisting/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:eventlist/Resources/Private/Partials/
        # cat=plugin.tx_eventlist_eventlisting/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:eventlist/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_eventlist_eventlisting//a; type=string; label=Default storage PID
        storagePid =
    }
}
