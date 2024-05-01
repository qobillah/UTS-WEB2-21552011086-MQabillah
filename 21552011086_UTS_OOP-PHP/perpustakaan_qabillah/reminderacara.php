<?php
class Event {
    public $name;
    public $date;

    public function __construct($name, $date) {
        $this->name = $name;
        $this->date = $date;
    }
}

class EventReminder {
    public $events = [];

    public function addEvent($event) {
        $this->events[] = $event;
    }

    public function remindEvents() {
        $today = date('Y-m-d');
        $upcomingEvents = array_filter($this->events, function($event) use ($today) {
            return $event->date >= $today;
        });
        if (!empty($upcomingEvents)) {
            echo "Upcoming Events:<br>";
            foreach ($upcomingEvents as $event) {
                echo "{$event->name} on {$event->date}<br>";
            }
        } else {
            echo "No upcoming events.";
        }
    }
}