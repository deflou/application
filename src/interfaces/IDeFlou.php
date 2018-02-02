<?php
namespace deflou\interfaces;

use deflou\interfaces\services\activities\IServiceEvent;
use deflou\interfaces\services\IServiceInstance;
use deflou\interfaces\triggers\results\collections\ITriggerResultsCollection;

interface IDeFlou
{
    public static function responseFail($response);

    /**
     * @param IServiceInstance $serviceInstance
     *
     * @return static
     */
    public static function notify(IServiceInstance $serviceInstance);

    /**
     * @param ITriggerResultsCollection $resultsCollection
     *
     * @return static
     */
    public static function about(ITriggerResultsCollection $resultsCollection);

    public static function of(IServiceEvent $serviceEvent);
}
