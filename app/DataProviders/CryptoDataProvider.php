<?php

namespace App\DataProviders;

abstract class CryptoDataProvider
{
    public static function data(): array
    {
        return [
            ['symbol' => 'BTCUSD', 'name' => 'Bitcoin', 'img' => 'https://cryptologos.cc/logos/bitcoin-btc-logo.png'],
            ['symbol' => 'ETHUSD', 'name' => 'Ethereum', 'img' => 'https://cryptologos.cc/logos/ethereum-eth-logo.png'],
            ['symbol' => 'USDTUSD', 'name' => 'Tether (USDT)', 'img' => 'https://cryptologos.cc/logos/tether-usdt-logo.png'],
            ['symbol' => 'BNBUSD', 'name' => 'Binance Coin', 'img' => 'https://cryptologos.cc/logos/binance-coin-bnb-logo.png'],
            ['symbol' => 'XRPUSD', 'name' => 'XRP (Ripple)', 'img' => 'https://cryptologos.cc/logos/xrp-xrp-logo.png'],
            ['symbol' => 'ADAUSD', 'name' => 'Cardano', 'img' => 'https://cryptologos.cc/logos/cardano-ada-logo.png'],
            ['symbol' => 'SOLUSD', 'name' => 'Solana', 'img' => 'https://cryptologos.cc/logos/solana-sol-logo.png'],
            ['symbol' => 'DOTUSD', 'name' => 'Polkadot', 'img' => 'https://cryptologos.cc/logos/polkadot-new-dot-logo.png'],
            ['symbol' => 'LTCUSD', 'name' => 'Litecoin', 'img' => 'https://cryptologos.cc/logos/litecoin-ltc-logo.png'],
            ['symbol' => 'DOGEUSD', 'name' => 'Dogecoin', 'img' => 'https://cryptologos.cc/logos/dogecoin-doge-logo.png'],
            ['symbol' => 'AVAXUSD', 'name' => 'Avalanche', 'img' => 'https://cryptologos.cc/logos/avalanche-avax-logo.png'],
            ['symbol' => 'MATICUSD', 'name' => 'Polygon (MATIC)', 'img' => 'https://cryptologos.cc/logos/polygon-matic-logo.png'],
            ['symbol' => 'UNIUSD', 'name' => 'Uniswap', 'img' => 'https://cryptologos.cc/logos/uniswap-uni-logo.png'],
            ['symbol' => 'SHIBUSD', 'name' => 'Shiba Inu', 'img' => 'https://cryptologos.cc/logos/shiba-inu-shib-logo.png'],
            ['symbol' => 'ATOMUSD', 'name' => 'Cosmos', 'img' => 'https://cryptologos.cc/logos/cosmos-atom-logo.png'],
            ['symbol' => 'TRXUSD', 'name' => 'Tron', 'img' => 'https://cryptologos.cc/logos/tron-trx-logo.png'],
            ['symbol' => 'LINKUSD', 'name' => 'Chainlink', 'img' => 'https://cryptologos.cc/logos/chainlink-link-logo.png'],
            ['symbol' => 'AAVEUSD', 'name' => 'Aave', 'img' => 'https://cryptologos.cc/logos/aave-aave-logo.png'],
            ['symbol' => 'BCHUSD', 'name' => 'Bitcoin Cash', 'img' => 'https://cryptologos.cc/logos/bitcoin-cash-bch-logo.png'],
            ['symbol' => 'XLMUSD', 'name' => 'Stellar', 'img' => 'https://cryptologos.cc/logos/stellar-xlm-logo.png'],
            ['symbol' => 'FILUSD', 'name' => 'Filecoin', 'img' => 'https://cryptologos.cc/logos/filecoin-fil-logo.png'],
            ['symbol' => 'NEARUSD', 'name' => 'Near Protocol', 'img' => 'https://cryptologos.cc/logos/near-protocol-near-logo.png'],
            ['symbol' => 'ALGOUSD', 'name' => 'Algorand', 'img' => 'https://cryptologos.cc/logos/algorand-algo-logo.png'],
            ['symbol' => 'ICPUSD', 'name' => 'Internet Computer', 'img' => 'https://cryptologos.cc/logos/internet-computer-icp-logo.png'],
            ['symbol' => 'SANDUSD', 'name' => 'The Sandbox', 'img' => 'https://cryptologos.cc/logos/the-sandbox-sand-logo.png'],
            ['symbol' => 'MKRUSD', 'name' => 'Maker', 'img' => 'https://cryptologos.cc/logos/maker-mkr-logo.png'],
            ['symbol' => 'ZILUSD', 'name' => 'Zilliqa', 'img' => 'https://cryptologos.cc/logos/zilliqa-zil-logo.png'],
            ['symbol' => 'GRTUSD', 'name' => 'The Graph', 'img' => 'https://cryptologos.cc/logos/the-graph-grt-logo.png'],
            ['symbol' => 'ENJUSD', 'name' => 'Enjin Coin', 'img' => 'https://cryptologos.cc/logos/enjin-coin-enj-logo.png'],
            ['symbol' => 'CHZUSD', 'name' => 'Chiliz', 'img' => 'https://cryptologos.cc/logos/chiliz-chz-logo.png'],
            ['symbol' => 'MANAUSD', 'name' => 'Decentraland', 'img' => 'https://cryptologos.cc/logos/decentraland-mana-logo.png'],
            ['symbol' => 'COMPUSD', 'name' => 'Compound', 'img' => 'https://cryptologos.cc/logos/compound-comp-logo.png'],
            ['symbol' => 'ZRXUSD', 'name' => '0x', 'img' => 'https://cryptologos.cc/logos/0x-zrx-logo.png'],
            ['symbol' => 'BALUSD', 'name' => 'Balancer', 'img' => 'https://cryptologos.cc/logos/balancer-bal-logo.png'],
            ['symbol' => 'DGBUSD', 'name' => 'DigiByte', 'img' => 'https://cryptologos.cc/logos/digibyte-dgb-logo.png'],
            ['symbol' => 'CELUSD', 'name' => 'Celsius', 'img' => 'https://cryptologos.cc/logos/celsius-cel-logo.png'],
            ['symbol' => 'WAVESUSD', 'name' => 'Waves', 'img' => 'https://cryptologos.cc/logos/waves-waves-logo.png'],
            ['symbol' => 'KNCUSD', 'name' => 'Kyber Network', 'img' => 'https://cryptologos.cc/logos/kyber-network-knc-logo.png'],
            ['symbol' => '1INCHUSD', 'name' => '1inch', 'img' => 'https://cryptologos.cc/logos/1inch-1inch-logo.png'],
            ['symbol' => 'HNTUSD', 'name' => 'Helium', 'img' => 'https://cryptologos.cc/logos/helium-hnt-logo.png'],
            ['symbol' => 'OMGUSD', 'name' => 'OMG Network', 'img' => 'https://cryptologos.cc/logos/omg-network-omg-logo.png'],
            ['symbol' => 'CRVUSD', 'name' => 'Curve DAO Token', 'img' => 'https://cryptologos.cc/logos/curve-dao-token-crv-logo.png'],
            ['symbol' => 'RENUSD', 'name' => 'Ren', 'img' => 'https://cryptologos.cc/logos/ren-ren-logo.png'],
            ['symbol' => 'BANDUSD', 'name' => 'Band Protocol', 'img' => 'https://cryptologos.cc/logos/band-protocol-band-logo.png'],
            ['symbol' => 'LRCUSD', 'name' => 'Loopring', 'img' => 'https://cryptologos.cc/logos/loopring-lrc-logo.png'],
            ['symbol' => 'STORJUSD', 'name' => 'Storj', 'img' => 'https://cryptologos.cc/logos/storj-storj-logo.png'],
            ['symbol' => 'ANKRUSD', 'name' => 'Ankr', 'img' => 'https://cryptologos.cc/logos/ankr-ankr-logo.png'],
            ['symbol' => 'SNXUSD', 'name' => 'Synthetix', 'img' => 'https://cryptologos.cc/logos/synthetix-snx-logo.png'],
            ['symbol' => 'LPTUSD', 'name' => 'Livepeer', 'img' => 'https://cryptologos.cc/logos/livepeer-lpt-logo.png'],
            ['symbol' => 'EGLDUSD', 'name' => 'MultiversX (Elrond)', 'img' => 'https://cryptologos.cc/logos/multiversx-egld-logo.png'],
            ['symbol' => 'FTTUSD', 'name' => 'FTX Token', 'img' => 'https://cryptologos.cc/logos/ftx-token-ftt-logo.png'],
            ['symbol' => 'HBARUSD', 'name' => 'Hedera', 'img' => 'https://cryptologos.cc/logos/hedera-hbar-logo.png'],
            ['symbol' => 'GALAUSD', 'name' => 'Gala', 'img' => 'https://cryptologos.cc/logos/gala-gala-logo.png'],
            ['symbol' => 'ARUSD', 'name' => 'Arweave', 'img' => 'https://cryptologos.cc/logos/arweave-ar-logo.png'],
            ['symbol' => 'CSPRUSD', 'name' => 'Casper', 'img' => 'https://cryptologos.cc/logos/casper-cspr-logo.png'],
            ['symbol' => 'XECUSD', 'name' => 'eCash', 'img' => 'https://cryptologos.cc/logos/ecash-xec-logo.png'],
            ['symbol' => 'RSRUSD', 'name' => 'Reserve Rights', 'img' => 'https://cryptologos.cc/logos/reserve-rights-rsr-logo.png'],
            ['symbol' => 'NEXOUSD', 'name' => 'Nexo', 'img' => 'https://cryptologos.cc/logos/nexo-nexo-logo.png'],
            ['symbol' => 'SCRTUSD', 'name' => 'Secret', 'img' => 'https://cryptologos.cc/logos/secret-scrt-logo.png'],
            ['symbol' => 'DENTUSD', 'name' => 'Dent', 'img' => 'https://cryptologos.cc/logos/dent-dent-logo.png'],
            ['symbol' => 'KEEPUSD', 'name' => 'Keep Network', 'img' => 'https://cryptologos.cc/logos/keep-network-keep-logo.png'],
            ['symbol' => 'BTGUSD', 'name' => 'Bitcoin Gold', 'img' => 'https://cryptologos.cc/logos/bitcoin-gold-btg-logo.png'],
            ['symbol' => 'CVCUSD', 'name' => 'Civic', 'img' => 'https://cryptologos.cc/logos/civic-cvc-logo.png'],
            ['symbol' => 'CFXUSD', 'name' => 'Conflux', 'img' => 'https://cryptologos.cc/logos/conflux-cfx-logo.png'],
            ['symbol' => 'PLAUSD', 'name' => 'PlayDapp', 'img' => 'https://cryptologos.cc/logos/playdapp-pla-logo.png'],
            ['symbol' => 'ZENUSD', 'name' => 'Horizen', 'img' => 'https://cryptologos.cc/logos/horizen-zen-logo.png'],
            ['symbol' => 'XNOUSD', 'name' => 'Nano', 'img' => 'https://cryptologos.cc/logos/nano-xno-logo.png'],
            ['symbol' => 'QNTUSD', 'name' => 'Quant', 'img' => 'https://cryptologos.cc/logos/quant-qnt-logo.png'],
            ['symbol' => 'STMXUSD', 'name' => 'StormX', 'img' => 'https://cryptologos.cc/logos/stormx-stmx-logo.png'],
            ['symbol' => 'BNTUSD', 'name' => 'Bancor', 'img' => 'https://cryptologos.cc/logos/bancor-bnt-logo.png'],
            ['symbol' => 'SXPUSD', 'name' => 'Solar (SXP)', 'img' => 'https://cryptologos.cc/logos/solar-sxp-logo.png'],
            ['symbol' => 'PAXUSD', 'name' => 'Paxos Standard', 'img' => 'https://cryptologos.cc/logos/paxos-standard-pax-logo.png'],
            ['symbol' => 'TRIBEUSD', 'name' => 'Tribe', 'img' => 'https://cryptologos.cc/logos/tribe-tribe-logo.png'],
            ['symbol' => 'LUNAUSD', 'name' => 'Terra Classic (LUNA)', 'img' => 'https://cryptologos.cc/logos/terra-luna-luna-logo.png'],
            ['symbol' => 'VETUSD', 'name' => 'VeChain', 'img' => 'https://cryptologos.cc/logos/vechain-vet-logo.png'],
            ['symbol' => 'SLPUSD', 'name' => 'Smooth Love Potion', 'img' => 'https://cryptologos.cc/logos/smooth-love-potion-slp-logo.png'],
            ['symbol' => 'CELOUSD', 'name' => 'Celo', 'img' => 'https://cryptologos.cc/logos/celo-celo-logo.png'],
            ['symbol' => 'UOSUSD', 'name' => 'Ultra', 'img' => 'https://cryptologos.cc/logos/ultra-uos-logo.png'],
            ['symbol' => 'FLOWUSD', 'name' => 'Flow', 'img' => 'https://cryptologos.cc/logos/flow-flow-logo.png'],
            ['symbol' => 'MLNUSD', 'name' => 'Enzyme', 'img' => 'https://cryptologos.cc/logos/enzyme-mln-logo.png'],
            ['symbol' => 'SPELLUSD', 'name' => 'Spell Token', 'img' => 'https://cryptologos.cc/logos/spell-token-spell-logo.png'],
            ['symbol' => 'TRUUSD', 'name' => 'TrueFi', 'img' => 'https://cryptologos.cc/logos/truefi-tru-logo.png'],
            ['symbol' => 'XVGUSD', 'name' => 'Verge', 'img' => 'https://cryptologos.cc/logos/verge-xvg-logo.png'],
            ['symbol' => 'GODSUSD', 'name' => 'Gods Unchained', 'img' => 'https://cryptologos.cc/logos/gods-unchained-gods-logo.png'],
            ['symbol' => 'COTIUSD', 'name' => 'COTI', 'img' => 'https://cryptologos.cc/logos/coti-coti-logo.png'],
            ['symbol' => 'SEROUSD', 'name' => 'Super Zero', 'img' => 'https://cryptologos.cc/logos/super-zero-sero-logo.png'],
            ['symbol' => 'FLOKIUSD', 'name' => 'Floki Inu', 'img' => 'https://cryptologos.cc/logos/floki-inu-floki-logo.png'],
            ['symbol' => 'ALPHAUSD', 'name' => 'Alpha Finance Lab', 'img' => 'https://cryptologos.cc/logos/alpha-finance-lab-alpha-logo.png'],
            ['symbol' => 'POLYUSD', 'name' => 'Polymath', 'img' => 'https://cryptologos.cc/logos/polymath-poly-logo.png'],
            ['symbol' => 'CLVUSD', 'name' => 'Clover Finance', 'img' => 'https://cryptologos.cc/logos/clover-finance-clv-logo.png'],
            ['symbol' => 'ERNUSD', 'name' => 'Ethernity Chain', 'img' => 'https://cryptologos.cc/logos/ethernity-chain-ern-logo.png'],
            ['symbol' => 'METISUSD', 'name' => 'MetisDAO', 'img' => 'https://cryptologos.cc/logos/metisdao-metis-logo.png'],
            ['symbol' => 'REEFUSD', 'name' => 'Reef', 'img' => 'https://cryptologos.cc/logos/reef-reef-logo.png'],
            ['symbol' => 'RSVUSD', 'name' => 'Reserve', 'img' => 'https://cryptologos.cc/logos/reserve-rsv-logo.png'],
            ['symbol' => 'MITHUSD', 'name' => 'Mithril', 'img' => 'https://cryptologos.cc/logos/mithril-mith-logo.png'],
            ['symbol' => 'FTMUSD', 'name' => 'Fantom', 'img' => 'https://cryptologos.cc/logos/fantom-ftm-logo.png'],
            ['symbol' => 'DYDXUSD', 'name' => 'dYdX', 'img' => 'https://cryptologos.cc/logos/dydx-dydx-logo.png'],
            ['symbol' => 'IMXUSD', 'name' => 'ImmutableX', 'img' => 'https://cryptologos.cc/logos/immutable-x-imx-logo.png'],
            ['symbol' => 'SUSHIUSD', 'name' => 'SushiSwap', 'img' => 'https://cryptologos.cc/logos/sushiswap-sushi-logo.png'],
            ['symbol' => 'ROSEUSD', 'name' => 'Oasis Network', 'img' => 'https://cryptologos.cc/logos/oasis-network-rose-logo.png'],
            ['symbol' => 'CHRUSD', 'name' => 'Chromia', 'img' => 'https://cryptologos.cc/logos/chromia-chr-logo.png'],
            ['symbol' => 'ILVUSD', 'name' => 'Illuvium', 'img' => 'https://cryptologos.cc/logos/illuvium-ilv-logo.png'],
            ['symbol' => 'KDAUSD', 'name' => 'Kadena', 'img' => 'https://cryptologos.cc/logos/kadena-kda-logo.png'],
            ['symbol' => 'XYOUSD', 'name' => 'XYO Network', 'img' => 'https://cryptologos.cc/logos/xyo-network-xyo-logo.png'],
            ['symbol' => 'AUDIOUSD', 'name' => 'Audius', 'img' => 'https://cryptologos.cc/logos/audius-audio-logo.png'],
            ['symbol' => 'BICOUSD', 'name' => 'Biconomy', 'img' => 'https://cryptologos.cc/logos/biconomy-bico-logo.png'],
            ['symbol' => 'YFIUSD', 'name' => 'yearn.finance', 'img' => 'https://cryptologos.cc/logos/yearn-finance-yfi-logo.png'],
            ['symbol' => 'ONEUSD', 'name' => 'Harmony', 'img' => 'https://cryptologos.cc/logos/harmony-one-logo.png'],
            ['symbol' => 'RUNEUSD', 'name' => 'THORChain', 'img' => 'https://cryptologos.cc/logos/thorchain-rune-logo.png'],
            ['symbol' => 'RAYUSD', 'name' => 'Raydium', 'img' => 'https://cryptologos.cc/logos/raydium-ray-logo.png'],
            ['symbol' => 'KSMUSD', 'name' => 'Kusama', 'img' => 'https://cryptologos.cc/logos/kusama-ksm-logo.png'],
            ['symbol' => 'FETUSD', 'name' => 'Fetch.ai', 'img' => 'https://cryptologos.cc/logos/fetch-ai-fet-logo.png'],
            ['symbol' => 'CTSIUSD', 'name' => 'Cartesi', 'img' => 'https://cryptologos.cc/logos/cartesi-ctsi-logo.png'],
            ['symbol' => 'NMRUSD', 'name' => 'Numeraire', 'img' => 'https://cryptologos.cc/logos/numeraire-nmr-logo.png'],
            ['symbol' => 'SKLUSD', 'name' => 'SKALE Network', 'img' => 'https://cryptologos.cc/logos/skale-skl-logo.png'],
            ['symbol' => 'INJUSD', 'name' => 'Injective Protocol', 'img' => 'https://cryptologos.cc/logos/injective-inj-logo.png'],
            ['symbol' => 'STPTUSD', 'name' => 'STP Network', 'img' => 'https://cryptologos.cc/logos/stp-network-stpt-logo.png'],
            ['symbol' => 'AKTUSD', 'name' => 'Akash Network', 'img' => 'https://cryptologos.cc/logos/akash-network-akt-logo.png'],
            ['symbol' => 'SLNDUSD', 'name' => 'Solend', 'img' => 'https://cryptologos.cc/logos/solend-slnd-logo.png'],
            ['symbol' => 'ALICEUSD', 'name' => 'My Neighbor Alice', 'img' => 'https://cryptologos.cc/logos/my-neighbor-alice-alice-logo.png'],
            ['symbol' => 'ALCXUSD', 'name' => 'Alchemix', 'img' => 'https://cryptologos.cc/logos/alchemix-alcx-logo.png'],
            ['symbol' => 'LDOUSD', 'name' => 'Lido DAO', 'img' => 'https://cryptologos.cc/logos/lido-dao-ldo-logo.png'],
            ['symbol' => 'BTRSTUSD', 'name' => 'Braintrust', 'img' => 'https://cryptologos.cc/logos/braintrust-btrst-logo.png'],
            ['symbol' => 'OXTUSD', 'name' => 'Orchid', 'img' => 'https://cryptologos.cc/logos/orchid-oxt-logo.png'],
            ['symbol' => 'RLCUSD', 'name' => 'iExec RLC', 'img' => 'https://cryptologos.cc/logos/iexec-rlc-rlc-logo.png'],
            ['symbol' => 'RNDRUSD', 'name' => 'Render Token', 'img' => 'https://cryptologos.cc/logos/render-token-rndr-logo.png'],
            ['symbol' => 'AUCTIONUSD', 'name' => 'Bounce Token', 'img' => 'https://cryptologos.cc/logos/bounce-token-auction-logo.png'],
            ['symbol' => 'XPRTUSD', 'name' => 'Persistence', 'img' => 'https://cryptologos.cc/logos/persistence-xprt-logo.png'],
            ['symbol' => 'BONDUSD', 'name' => 'BarnBridge', 'img' => 'https://cryptologos.cc/logos/barnbridge-bond-logo.png'],
            ['symbol' => 'DPIUSD', 'name' => 'DeFi Pulse Index', 'img' => 'https://cryptologos.cc/logos/defi-pulse-index-dpi-logo.png'],
            ['symbol' => 'CVPUSD', 'name' => 'PowerPool', 'img' => 'https://cryptologos.cc/logos/powerpool-cvp-logo.png'],
            ['symbol' => 'PEOPLEUSD', 'name' => 'ConstitutionDAO', 'img' => 'https://cryptologos.cc/logos/constitutiondao-people-logo.png'],
            ['symbol' => 'IDEXUSD', 'name' => 'IDEX', 'img' => 'https://cryptologos.cc/logos/idex-idex-logo.png'],
            ['symbol' => 'RGTUSD', 'name' => 'Rari Governance Token', 'img' => 'https://cryptologos.cc/logos/rari-governance-token-rgt-logo.png'],
            ['symbol' => 'CQTUSD', 'name' => 'Covalent', 'img' => 'https://cryptologos.cc/logos/covalent-cqt-logo.png'],
            ['symbol' => 'OUSDUSD', 'name' => 'Origin Dollar', 'img' => 'https://cryptologos.cc/logos/origin-dollar-ousd-logo.png'],
            ['symbol' => 'EPSUSD', 'name' => 'Ellipsis', 'img' => 'https://cryptologos.cc/logos/ellipsis-eps-logo.png'],
            ['symbol' => 'MNGOUSD', 'name' => 'Mango', 'img' => 'https://cryptologos.cc/logos/mango-mngo-logo.png'],
            ['symbol' => 'MXUSD', 'name' => 'MX Token', 'img' => 'https://cryptologos.cc/logos/mx-token-mx-logo.png'],
            ['symbol' => 'LCXUSD', 'name' => 'LCX', 'img' => 'https://cryptologos.cc/logos/lcx-lcx-logo.png'],
            ['symbol' => 'API3USD', 'name' => 'API3', 'img' => 'https://cryptologos.cc/logos/api3-api3-logo.png'],
            ['symbol' => 'BZZUSD', 'name' => 'Swarm', 'img' => 'https://cryptologos.cc/logos/swarm-bzz-logo.png'],
            ['symbol' => 'EURSUSD', 'name' => 'STASIS EURO', 'img' => 'https://cryptologos.cc/logos/stasis-euro-eurs-logo.png'],
            ['symbol' => 'MINAUSD', 'name' => 'Mina', 'img' => 'https://cryptologos.cc/logos/mina-protocol-mina-logo.png'],
            ['symbol' => 'BANDUSD', 'name' => 'Band Protocol', 'img' => 'https://cryptologos.cc/logos/band-protocol-band-logo.png'],
            ['symbol' => 'CVCUSD', 'name' => 'Civic', 'img' => 'https://cryptologos.cc/logos/civic-cvc-logo.png'],
            ['symbol' => 'BADGERUSD', 'name' => 'Badger DAO', 'img' => 'https://cryptologos.cc/logos/badger-dao-badger-logo.png'],
            ['symbol' => 'TWTUSD', 'name' => 'Trust Wallet Token', 'img' => 'https://cryptologos.cc/logos/trust-wallet-token-twt-logo.png'],
            ['symbol' => 'UOSUSD', 'name' => 'Ultra', 'img' => 'https://cryptologos.cc/logos/ultra-uos-logo.png'],
            ['symbol' => 'POLSUSD', 'name' => 'Polkastarter', 'img' => 'https://cryptologos.cc/logos/polkastarter-pols-logo.png'],
            ['symbol' => 'CKBUSD', 'name' => 'Nervos Network', 'img' => 'https://cryptologos.cc/logos/nervos-network-ckb-logo.png'],
            ['symbol' => 'C98USD', 'name' => 'Coin98', 'img' => 'https://cryptologos.cc/logos/coin98-c98-logo.png'],
            ['symbol' => 'MLNUSD', 'name' => 'Enzyme', 'img' => 'https://cryptologos.cc/logos/enzyme-mln-logo.png'],
            ['symbol' => 'STMXUSD', 'name' => 'StormX', 'img' => 'https://cryptologos.cc/logos/stormx-stmx-logo.png'],
            ['symbol' => 'QNTUSD', 'name' => 'Quant', 'img' => 'https://cryptologos.cc/logos/quant-qnt-logo.png'],
            ['symbol' => 'JSTUSD', 'name' => 'JUST', 'img' => 'https://cryptologos.cc/logos/just-jst-logo.png'],
            ['symbol' => 'REQUSD', 'name' => 'Request', 'img' => 'https://cryptologos.cc/logos/request-req-logo.png'],
            ['symbol' => 'PERPUSD', 'name' => 'Perpetual Protocol', 'img' => 'https://cryptologos.cc/logos/perpetual-protocol-perp-logo.png'],
            ['symbol' => 'GALAUSD', 'name' => 'Gala', 'img' => 'https://cryptologos.cc/logos/gala-gala-logo.png'],
            ['symbol' => 'ARUSD', 'name' => 'Arweave', 'img' => 'https://cryptologos.cc/logos/arweave-ar-logo.png'],
            ['symbol' => 'YGGUSD', 'name' => 'Yield Guild Games', 'img' => 'https://cryptologos.cc/logos/yield-guild-games-ygg-logo.png'],
            ['symbol' => 'OGNUSD', 'name' => 'Origin Protocol', 'img' => 'https://cryptologos.cc/logos/origin-protocol-ogn-logo.png'],
            ['symbol' => 'KEEPUSD', 'name' => 'Keep Network', 'img' => 'https://cryptologos.cc/logos/keep-network-keep-logo.png'],
            ['symbol' => 'XVSUSD', 'name' => 'Venus', 'img' => 'https://cryptologos.cc/logos/venus-xvs-logo.png'],
            ['symbol' => 'UTKUSD', 'name' => 'Utrust', 'img' => 'https://cryptologos.cc/logos/utrust-utk-logo.png'],
            ['symbol' => 'IRISUSD', 'name' => 'IRISnet', 'img' => 'https://cryptologos.cc/logos/irisnet-iris-logo.png'],
            ['symbol' => 'OCEANUSD', 'name' => 'Ocean Protocol', 'img' => 'https://cryptologos.cc/logos/ocean-protocol-ocean-logo.png'],
            ['symbol' => 'PHAUSD', 'name' => 'Phala Network', 'img' => 'https://cryptologos.cc/logos/phala-network-pha-logo.png'],
            ['symbol' => 'XNOUSD', 'name' => 'Nano', 'img' => 'https://cryptologos.cc/logos/nano-xno-logo.png'],
            ['symbol' => 'ALBTUSD', 'name' => 'AllianceBlock', 'img' => 'https://cryptologos.cc/logos/allianceblock-albt-logo.png'],
            ['symbol' => 'HNTUSD', 'name' => 'Helium', 'img' => 'https://cryptologos.cc/logos/helium-hnt-logo.png'],
            ['symbol' => 'BETAUSD', 'name' => 'Beta Finance', 'img' => 'https://cryptologos.cc/logos/beta-finance-beta-logo.png'],
            ['symbol' => 'PYRUSD', 'name' => 'Vulcan Forged PYR', 'img' => 'https://cryptologos.cc/logos/vulcan-forged-pyr-pyr-logo.png'],
            ['symbol' => 'XCADUSD', 'name' => 'XCAD Network', 'img' => 'https://cryptologos.cc/logos/xcad-network-xcad-logo.png'],
            ['symbol' => 'KAVAUSD', 'name' => 'Kava', 'img' => 'https://cryptologos.cc/logos/kava-kava-logo.png'],
            ['symbol' => 'CSPRUSD', 'name' => 'Casper', 'img' => 'https://cryptologos.cc/logos/casper-cspr-logo.png'],
            ['symbol' => 'POWRUSD', 'name' => 'Power Ledger', 'img' => 'https://cryptologos.cc/logos/power-ledger-powr-logo.png'],
            ['symbol' => 'REEFUSD', 'name' => 'Reef', 'img' => 'https://cryptologos.cc/logos/reef-reef-logo.png'],
            ['symbol' => 'XVGUSD', 'name' => 'Verge', 'img' => 'https://cryptologos.cc/logos/verge-xvg-logo.png'],
            ['symbol' => 'SXPUSD', 'name' => 'Swipe', 'img' => 'https://cryptologos.cc/logos/swipe-sxp-logo.png'],
            ['symbol' => 'TRUUSD', 'name' => 'TrueFi', 'img' => 'https://cryptologos.cc/logos/truefi-tru-logo.png'],
            ['symbol' => 'ORNUSD', 'name' => 'Orion Protocol', 'img' => 'https://cryptologos.cc/logos/orion-protocol-orn-logo.png'],
            ['symbol' => 'RIFUSD', 'name' => 'RSK Infrastructure Framework', 'img' => 'https://cryptologos.cc/logos/rif-rif-logo.png'],
            ['symbol' => 'FLMUSD', 'name' => 'Flamingo', 'img' => 'https://cryptologos.cc/logos/flamingo-flm-logo.png'],
            ['symbol' => 'PONDUSD', 'name' => 'Marlin', 'img' => 'https://cryptologos.cc/logos/marlin-pond-logo.png'],
            ['symbol' => 'IDUSD', 'name' => 'SPACE ID', 'img' => 'https://cryptologos.cc/logos/space-id-id-logo.png'],
            ['symbol' => 'DAGUSD', 'name' => 'Constellation', 'img' => 'https://cryptologos.cc/logos/constellation-dag-logo.png'],
            ['symbol' => 'UFOUSD', 'name' => 'UFO Gaming', 'img' => 'https://cryptologos.cc/logos/ufo-gaming-ufo-logo.png'],
            ['symbol' => 'TRBUSD', 'name' => 'Tellor', 'img' => 'https://cryptologos.cc/logos/tellor-trb-logo.png'],
            ['symbol' => 'NOIAUSD', 'name' => 'Syntropy', 'img' => 'https://cryptologos.cc/logos/syntropy-noia-logo.png'],
            ['symbol' => 'BFCUSD', 'name' => 'Bifrost', 'img' => 'https://cryptologos.cc/logos/bifrost-bfc-logo.png'],
            ['symbol' => 'RACAUSD', 'name' => 'Radio Caca', 'img' => 'https://cryptologos.cc/logos/radio-caca-raca-logo.png'],
        ];
    }
}