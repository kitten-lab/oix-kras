# **silo** alef-bet router system
the silo is organized by top-level route partitions 
[ A ] [ B ] [ C ] [ D ] [ K ] [ M ]
each partition has a distinct responsibility and controls a specific aspect of the silo.  

this structure separates identity, authorization, configuration, data, and rendering concerns.

## route a: identity and presentation layer
defines what something *is* and how it appears.  

contains:
- identities
- stylesheets
- shells/environment frames

purpose: 
- provides the visual and structural wrapper for pages ("surface rooms")
- establishes system-facing identity definitions

## route b: authorization and entry layer
controls access and external facing points (index files)

contains:
- sky_auth and sky_sig authorization files
- public-facing launch point (index files)

purpose:
- validates the launch sequence for the environment to route through
- acts as bridge between the external requests and the internal silo structure

## route c: configuration layer
defines each silo system's structure and relationships

contains:
- configuration files (figs and sigs)
- room definitions (room auth files)
- key mapping (navigation configurations)

purpose:
- determines what exists in the silo
- defines how rooms, surfaces, and structures are recognized and displayed

## route d: data layer
stores all recorded materials and silo outputs

contains: 
- crates (core data units)
- threading/tagging outputs
- temporal reports (TPS)
- lookup structures

purpose:
- persists all content and silo-generated metadata
- supports retrieval, indexing, and analysis

# route m: surface rooms & keys (execution layer)
defines the actual user-facing surface environments

contains:
- folders ("surface rooms")
- pages written in DSL/PHP ("keys")
- surface-level implementation

purpose:
- renders content
- connects user interaction to silo tools and data

## in closing
a route must be validated and configured to be recognized by the silo.
simply existing in a folder does not make it accessable.