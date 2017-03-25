<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 14/11/16
 * Time: 23:07
 */

namespace Miky\Component\Project\Model;


use Miky\Component\Core\Model\CommonModelInterface;
use Miky\Component\Core\Model\CommonModelTrait;
use Miky\Component\User\Model\Administrator;
use Miky\Component\User\Model\CustomerInterface;
use Miky\Component\User\Model\Employee;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Project implements ProjectInterface, CommonModelInterface
{
    Use CommonModelTrait;

    /**
     * @var Employee[]|Collection
     */
    protected $assignedEmployees;

    /**
     * @var CustomerInterface
     */
    protected $customer;

    /**
     * @var Administrator[]|Collection
     */
    protected $assignedAdministrators;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $reference;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var ProjectCodeInterface[]|Collection
     */
    protected $codes;

    /**
     * Project constructor.
     */
    public function __construct()
    {
        $this->assignedAdministrators = new ArrayCollection();
        $this->assignedEmployees = new ArrayCollection();
        $this->codes = new ArrayCollection();
    }

    /**
     * @return \Miky\Component\User\Model\Employee[]|Collection
     */
    public function getAssignedEmployees()
    {
        return $this->assignedEmployees;
    }

    /**
     * Add assigned Employee
     *
     * @param Employee $employee
     *
     * @return ProjectInterface
     */
    public function addAssignedEmployee($employee)
    {
        $this->assignedEmployees[] = $employee;

        return $this;
    }

    /**
     * Remove assigned Employee
     *
     * @param Employee $employee
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeAssignedEmployee($employee)
    {
        return $this->assignedEmployees->removeElement($employee);
    }

    /**
     * @param \Miky\Component\User\Model\Employee[]|Collection $assignedEmployees
     */
    public function setAssignedEmployees($assignedEmployees)
    {
        $this->assignedEmployees = $assignedEmployees;
    }

    /**
     * @return CustomerInterface
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param CustomerInterface $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return \Miky\Component\User\Model\Administrator[]|Collection
     */
    public function getAssignedAdministrators()
    {
        return $this->assignedAdministrators;
    }

    /**
     * Add assigned Administrators
     *
     * @param Administrator $administrator
     *
     * @return ProjectInterface
     */
    public function addAssignedAdministrator($administrator)
    {
        $this->assignedAdministrators[] = $administrator;

        return $this;
    }

    /**
     * Remove assigned Administrators
     *
     * @param Administrator $administrator
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeAssignedAdministrator($administrator)
    {
        return $this->assignedAdministrators->removeElement($administrator);
    }

    /**
     * @param \Miky\Component\User\Model\Administrator[]|Collection $assignedAdministrators
     */
    public function setAssignedAdministrators($assignedAdministrators)
    {
        $this->assignedAdministrators = $assignedAdministrators;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return ProjectCodeInterface[]|Collection
     */
    public function getCodes()
    {
        return $this->codes;
    }
    
    /**
     * Add code
     *
     * @param ProjectCodeInterface $code
     *
     * @return ProjectInterface
     */
    public function addCode($code)
    {
        $this->codes[] = $code;

        return $this;
    }

    /**
     * Remove code
     *
     * @param ProjectCodeInterface $code
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCode($code)
    {
        return $this->codes->removeElement($code);
    }
    
    /**
     * @param ProjectCodeInterface[]|Collection $codes
     */
    public function setCodes($codes)
    {
        $this->codes = $codes;
    }
    
    


}