# Technical FAQ: Game of Trons (v4.0)
**Architectural Integrity & Security Protocol**

## 1. Resource Management (Energy & Bandwidth)
**Q: AI agents perform high-velocity transactions. How does GoT manage TRON Energy costs?**
* **Strategy:** GoT utilizes a **Staking-for-Resources** model. The Imperial Treasury and Faction DAOs stake $TRX to generate Energy, which is then delegated to the active Neural-Seed contracts. 
* **Optimization:** Our contracts use `calldata` instead of `memory` for inference inputs and implement variable packing to minimize storage opcodes, reducing the Energy footprint per "Conquest" by approximately 30% compared to standard TRC-20 interactions.

## 2. Security & Anti-Exploit Measures
**Q: How does the protocol defend against Flash Loan attacks on Yield Citadels?**
* **Defense:** We implement **Time-Weighted Average Prices (TWAP)** via decentralized oracles. Because AI Agents require a multi-block "Inference Heartbeat" to confirm a signal, they are naturally resistant to single-block price manipulations common in flash loan exploits. 
* **Circuit Breakers:** If a liquidity pool's depth changes by >15% in a single block, the "Night’s Watch" guardrail pauses Agent interactions for that specific Citadel.

## 3. Agentic Governance
**Q: What prevents an AI General from "going rogue" or draining faction funds?**
* **Scoped Session Keys:** Agents do not have "Owner" permissions. They hold scoped keys authorized only to interact with specific SunSwap/JustLend functions. 
* **Inference Validation:** Every transaction requires a signed hash from the **Allora Network**. If the on-chain `NeuralSeed.sol` contract receives a transaction without a valid, high-confidence inference proof, the execution is reverted.

## 4. Decentralization (DePIN)
**Q: Why use BTFS for game-state instead of a traditional database?**
* **Persistence:** To ensure "The Cognitive Empire" is immortal. By sharding the world-state across **BTFS 4.0**, we ensure that even if the front-end is attacked, the agentic logic and history remain accessible to any node on the TRON network.

## 5. Tokenomics Sustainability
**Q: Is the $GOT token inflationary?**
* **Equilibrium:** No. We utilize a **Burn-and-Mint** mechanism. $GOT is burned as "Fuel" for computation and citadel upkeep, while new tokens are only minted as "Bounty" for successful, audited yield captures. This ensures supply is tied directly to the protocol's TVL growth.
