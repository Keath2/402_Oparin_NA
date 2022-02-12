<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Student;

class StudentTest extends TestCase
{

    public function testTextRepresentation()
    {
        $student = new Student();
        $student -> setName("Никита") -> setLastName("Опарин") -> setFaculty("ФМиИТ") -> setCourse(4) -> setGroup(402);
        $this -> assertSame(
            "Id: 1" . "\n" .
            "Фамилия: Опарин" . "\n" .
            "Имя: Никита" . "\n" .
            "Факультет: ФМиИТ" . "\n" .
            "Курс: 4" . "\n" .
            "Группа: 402",
            $student -> __toString()
        );
    }

    public function testGetFuntions()
    {
        $student = new Student();
        $student -> setName("Никита") -> setLastName("Опарин") -> setFaculty("ФМиИТ") -> setCourse(4) -> setGroup(402);
        $this ->  assertSame("Никита", $student -> getName());
        $this ->  assertSame("Опарин", $student -> getLastName());
        $this ->  assertSame("ФМиИТ", $student -> getFaculty());
        $this ->  assertSame(4, $student -> getCourse());
        $this ->  assertSame(402, $student -> getGroup());
    }
}
