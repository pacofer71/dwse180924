<?php
namespace src;
class PlanFactory{
    public function getPlan(Cliente $cliente): Plan{
        return match(true){
            $cliente->totalCompra>=10000=>new OroPlan,
            $cliente->totalCompra>=7500=>new PlataPlan,
            $cliente->totalCompra>=1500=>new BroncePlan,
            default=>new StarterPlan
        };
    }
}