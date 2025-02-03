# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [v1.3.5] - 2025-02-03
### :sparkles: New Features
- [`92b722a`](https://github.com/eduardomozart/glpi-singlesignon/commit/92b722af0e9d8a40fcb89a0aae55b4430e02f195) - Added button for fast test *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`4a8fedc`](https://github.com/eduardomozart/glpi-singlesignon/commit/4a8fedc486162e2d046937dad016d8aa33919e50) - New release *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`4901caf`](https://github.com/eduardomozart/glpi-singlesignon/commit/4901cafe3c5d3eb0f7f41e93bff4a50912c166ae) - Added es_ES translation *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`7552525`](https://github.com/eduardomozart/glpi-singlesignon/commit/755252547056d650a3e5a4c394c2b6af865e4ede) - Added lint to provider page from plugin page *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`135975f`](https://github.com/eduardomozart/glpi-singlesignon/commit/135975fa192032871d5bbb10e13d300a05884506) - Added license (close [#36](https://github.com/eduardomozart/glpi-singlesignon/pull/36)) *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`51999b4`](https://github.com/eduardomozart/glpi-singlesignon/commit/51999b40dfe7fafa9473755820acdd60cdc808fe) - **locales**: french translation *(PR [#65](https://github.com/eduardomozart/glpi-singlesignon/pull/65) by [@ternium1](https://github.com/ternium1))*
- [`cae95d8`](https://github.com/eduardomozart/glpi-singlesignon/commit/cae95d8a43c9c375368c10b46c640926b690e5df) - Added create new user for Google *(PR [#70](https://github.com/eduardomozart/glpi-singlesignon/pull/70) by [@ch-tm](https://github.com/ch-tm))*
- [`144c3cd`](https://github.com/eduardomozart/glpi-singlesignon/commit/144c3cdc9c4d7915c64b21e8b64f56c522b40d90) - Improve Reverse Proxy and Plugin folder support *(PR [#103](https://github.com/eduardomozart/glpi-singlesignon/pull/103) by [@eduardomozart](https://github.com/eduardomozart))*
- [`ebff864`](https://github.com/eduardomozart/glpi-singlesignon/commit/ebff8646f933038ad94969cc1a424135381f9f9f) - Sync GLPI photo with Azure AD *(PR [#101](https://github.com/eduardomozart/glpi-singlesignon/pull/101) by [@eduardomozart](https://github.com/eduardomozart))*

### :bug: Bug Fixes
- [`25f8fd6`](https://github.com/eduardomozart/glpi-singlesignon/commit/25f8fd619526c1e28e47a7cb5cc979306f3eaf66) - Fixed default scope *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`8854cc5`](https://github.com/eduardomozart/glpi-singlesignon/commit/8854cc531295ebd104d16839ff70d90199b3db26) - Fixed http_build_query warning (close [#3](https://github.com/eduardomozart/glpi-singlesignon/pull/3)) *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`c79c0dd`](https://github.com/eduardomozart/glpi-singlesignon/commit/c79c0dd4d6da69f7a15542ff0c3f1384724a027a) - 9 Google callback with parameters *(PR [#20](https://github.com/eduardomozart/glpi-singlesignon/pull/20) by [@keha35](https://github.com/keha35))*
- [`3ba5059`](https://github.com/eduardomozart/glpi-singlesignon/commit/3ba5059245a6b187890946d5bf93b46012eba0b3) - Added verbose debug information *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`c7b1be1`](https://github.com/eduardomozart/glpi-singlesignon/commit/c7b1be17b3c2d80c6df31d334d3c7d3de1214a74) - Fixed redirect for default provider *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`be22981`](https://github.com/eduardomozart/glpi-singlesignon/commit/be229815a7f026e40903c588dc1c1eb3d7fef972) - Fixed show buttons for GLPI >= 10.0 *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`2c83a54`](https://github.com/eduardomozart/glpi-singlesignon/commit/2c83a54f013e596d28b7d52beb56145d2555f4b0) - Could not add picture see [#88](https://github.com/eduardomozart/glpi-singlesignon/pull/88) *(PR [#89](https://github.com/eduardomozart/glpi-singlesignon/pull/89) by [@invisiblemarcel](https://github.com/invisiblemarcel))*
- [`ddc9c2d`](https://github.com/eduardomozart/glpi-singlesignon/commit/ddc9c2ddc1a3dd7fe1f76c44c844b1d3e690c9d7) - Add missing string to translation *(PR [#93](https://github.com/eduardomozart/glpi-singlesignon/pull/93) by [@eduardomozart](https://github.com/eduardomozart))*
- [`8c63d47`](https://github.com/eduardomozart/glpi-singlesignon/commit/8c63d47f64f5ab190b39ce39ecf0743ad5d23e05) - Add missing translation strings *(PR [#102](https://github.com/eduardomozart/glpi-singlesignon/pull/102) by [@eduardomozart](https://github.com/eduardomozart))*
- [`1a1a7e8`](https://github.com/eduardomozart/glpi-singlesignon/commit/1a1a7e8c7a4f8786bfdbc275b09efeae63cf3cc1) - Add API token date *(PR [#100](https://github.com/eduardomozart/glpi-singlesignon/pull/100) by [@eduardomozart](https://github.com/eduardomozart))*

### :wrench: Chores
- [`23c7b58`](https://github.com/eduardomozart/glpi-singlesignon/commit/23c7b58e8dab970e24e4ebdc0d12869d12aa7532) - Removed composer dependency *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`7bf863e`](https://github.com/eduardomozart/glpi-singlesignon/commit/7bf863e047e114cc9b0664f6334593e6a948a37b) - Show CallBack URL in form *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`b59ac01`](https://github.com/eduardomozart/glpi-singlesignon/commit/b59ac01f826f6fec3598c9418b215bd1ed3871d9) - Removed funding *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`bd01b9c`](https://github.com/eduardomozart/glpi-singlesignon/commit/bd01b9c045b7dec749f51ccd608e0badbdd22fe7) - Updated vscode configs *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`75e8921`](https://github.com/eduardomozart/glpi-singlesignon/commit/75e892101e8c7930fb9b2767872f5bc222395b1e) - **changelog**: Update changelog *(commit by [@invalid-email-address](https://github.com/invalid-email-address))*
- [`a8bca9c`](https://github.com/eduardomozart/glpi-singlesignon/commit/a8bca9c753b7b0d2b780a0045febeca6da7208fc) - **changelog**: Update changelog *(commit by [@invalid-email-address](https://github.com/invalid-email-address))*


## [v1.3.4] - 2025-02-03
### :sparkles: New Features
- [`92b722a`](https://github.com/eduardomozart/glpi-singlesignon/commit/92b722af0e9d8a40fcb89a0aae55b4430e02f195) - Added button for fast test *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`4a8fedc`](https://github.com/eduardomozart/glpi-singlesignon/commit/4a8fedc486162e2d046937dad016d8aa33919e50) - New release *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`4901caf`](https://github.com/eduardomozart/glpi-singlesignon/commit/4901cafe3c5d3eb0f7f41e93bff4a50912c166ae) - Added es_ES translation *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`7552525`](https://github.com/eduardomozart/glpi-singlesignon/commit/755252547056d650a3e5a4c394c2b6af865e4ede) - Added lint to provider page from plugin page *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`135975f`](https://github.com/eduardomozart/glpi-singlesignon/commit/135975fa192032871d5bbb10e13d300a05884506) - Added license (close [#36](https://github.com/eduardomozart/glpi-singlesignon/pull/36)) *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`51999b4`](https://github.com/eduardomozart/glpi-singlesignon/commit/51999b40dfe7fafa9473755820acdd60cdc808fe) - **locales**: french translation *(PR [#65](https://github.com/eduardomozart/glpi-singlesignon/pull/65) by [@ternium1](https://github.com/ternium1))*
- [`cae95d8`](https://github.com/eduardomozart/glpi-singlesignon/commit/cae95d8a43c9c375368c10b46c640926b690e5df) - Added create new user for Google *(PR [#70](https://github.com/eduardomozart/glpi-singlesignon/pull/70) by [@ch-tm](https://github.com/ch-tm))*
- [`144c3cd`](https://github.com/eduardomozart/glpi-singlesignon/commit/144c3cdc9c4d7915c64b21e8b64f56c522b40d90) - Improve Reverse Proxy and Plugin folder support *(PR [#103](https://github.com/eduardomozart/glpi-singlesignon/pull/103) by [@eduardomozart](https://github.com/eduardomozart))*
- [`ebff864`](https://github.com/eduardomozart/glpi-singlesignon/commit/ebff8646f933038ad94969cc1a424135381f9f9f) - Sync GLPI photo with Azure AD *(PR [#101](https://github.com/eduardomozart/glpi-singlesignon/pull/101) by [@eduardomozart](https://github.com/eduardomozart))*

### :bug: Bug Fixes
- [`25f8fd6`](https://github.com/eduardomozart/glpi-singlesignon/commit/25f8fd619526c1e28e47a7cb5cc979306f3eaf66) - Fixed default scope *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`8854cc5`](https://github.com/eduardomozart/glpi-singlesignon/commit/8854cc531295ebd104d16839ff70d90199b3db26) - Fixed http_build_query warning (close [#3](https://github.com/eduardomozart/glpi-singlesignon/pull/3)) *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`c79c0dd`](https://github.com/eduardomozart/glpi-singlesignon/commit/c79c0dd4d6da69f7a15542ff0c3f1384724a027a) - 9 Google callback with parameters *(PR [#20](https://github.com/eduardomozart/glpi-singlesignon/pull/20) by [@keha35](https://github.com/keha35))*
- [`3ba5059`](https://github.com/eduardomozart/glpi-singlesignon/commit/3ba5059245a6b187890946d5bf93b46012eba0b3) - Added verbose debug information *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`c7b1be1`](https://github.com/eduardomozart/glpi-singlesignon/commit/c7b1be17b3c2d80c6df31d334d3c7d3de1214a74) - Fixed redirect for default provider *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`be22981`](https://github.com/eduardomozart/glpi-singlesignon/commit/be229815a7f026e40903c588dc1c1eb3d7fef972) - Fixed show buttons for GLPI >= 10.0 *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`2c83a54`](https://github.com/eduardomozart/glpi-singlesignon/commit/2c83a54f013e596d28b7d52beb56145d2555f4b0) - Could not add picture see [#88](https://github.com/eduardomozart/glpi-singlesignon/pull/88) *(PR [#89](https://github.com/eduardomozart/glpi-singlesignon/pull/89) by [@invisiblemarcel](https://github.com/invisiblemarcel))*
- [`ddc9c2d`](https://github.com/eduardomozart/glpi-singlesignon/commit/ddc9c2ddc1a3dd7fe1f76c44c844b1d3e690c9d7) - Add missing string to translation *(PR [#93](https://github.com/eduardomozart/glpi-singlesignon/pull/93) by [@eduardomozart](https://github.com/eduardomozart))*
- [`8c63d47`](https://github.com/eduardomozart/glpi-singlesignon/commit/8c63d47f64f5ab190b39ce39ecf0743ad5d23e05) - Add missing translation strings *(PR [#102](https://github.com/eduardomozart/glpi-singlesignon/pull/102) by [@eduardomozart](https://github.com/eduardomozart))*
- [`1a1a7e8`](https://github.com/eduardomozart/glpi-singlesignon/commit/1a1a7e8c7a4f8786bfdbc275b09efeae63cf3cc1) - Add API token date *(PR [#100](https://github.com/eduardomozart/glpi-singlesignon/pull/100) by [@eduardomozart](https://github.com/eduardomozart))*

### :wrench: Chores
- [`23c7b58`](https://github.com/eduardomozart/glpi-singlesignon/commit/23c7b58e8dab970e24e4ebdc0d12869d12aa7532) - Removed composer dependency *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`7bf863e`](https://github.com/eduardomozart/glpi-singlesignon/commit/7bf863e047e114cc9b0664f6334593e6a948a37b) - Show CallBack URL in form *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`b59ac01`](https://github.com/eduardomozart/glpi-singlesignon/commit/b59ac01f826f6fec3598c9418b215bd1ed3871d9) - Removed funding *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`bd01b9c`](https://github.com/eduardomozart/glpi-singlesignon/commit/bd01b9c045b7dec749f51ccd608e0badbdd22fe7) - Updated vscode configs *(commit by [@edgardmessias](https://github.com/edgardmessias))*
- [`75e8921`](https://github.com/eduardomozart/glpi-singlesignon/commit/75e892101e8c7930fb9b2767872f5bc222395b1e) - **changelog**: Update changelog *(commit by [@invalid-email-address](https://github.com/invalid-email-address))*
- [`a8bca9c`](https://github.com/eduardomozart/glpi-singlesignon/commit/a8bca9c753b7b0d2b780a0045febeca6da7208fc) - **changelog**: Update changelog *(commit by [@invalid-email-address](https://github.com/invalid-email-address))*

[v1.3.4]: https://github.com/eduardomozart/glpi-singlesignon/compare/1.0.0...v1.3.4
[v1.3.5]: https://github.com/eduardomozart/glpi-singlesignon/compare/1.0.0...v1.3.5
