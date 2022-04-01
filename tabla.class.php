<?php
    class Empleado{
        //Class attribute
       
        private $nombre;
        private $apellido;
        private $isss;
        private $renta;
        private $afp;
        private $sueldoNominal;
        private $sueldoLiquido;
        private $pagoxhoraextra;
        private $descuentos;

        //Constants
        const descISSS = 0.03;
        const descRenta = 0.075;
        const descAFP = 0.0625;

        //Construct
        function __construct()
        {
            self::$idEmpleado++;
            $this->nombre = '';
            $this->apellido = '';
            $this->sueldoLiquido = 0.0;
            $this->pagoxhoraextra = 0.0;
            $this->descuentos = 0.0;
        }

        //Class methods
        function Calcular_Tabla($salario)
        {
            $this->sueldoNominal = $salario;
 

            if($this->pagoxhoraextra > 0)
            {
                $this->isss = ($salario + $this->pagoxhoraextra) * self::descISSS;
                $this->afp = ($salario + $this->pagoxhoraextra) * self::descAFP;
            }
            else
            {
                $this->isss = $salario * self::descISSS;
                $this->afp = $salario * self::descAFP;
            }
            $salariocondescuento = $this->sueldoNominal - ($this->isss + $this->afp);

            if($salariocondescuento > 2038.10)
            {
                $this->renta = $salariocondescuento * 0.3;
            }
            elseif($salariocondescuento > 895.24 && $salariocondescuento <= 2038.10)
            {
                $this->renta = $salariocondescuento * 0.2;
            }
            elseif($salariocondescuento > 472.00 && $salariocondescuento <= 895.24)
            {
                $this->renta = $salariocondescuento * 0.1;
            }

            


            $this->sueldoNominal = $salario;
            $this->sueldoLiquido = $this->sueldoNominal + $this->pagoxhoraextra - ($this->isss + $this->afp + $this->renta);

            if($this->descuentos > 0)
            {
                $this->sueldoLiquido = $this->sueldoLiquido - $this->descuentos;
        
            }

            $this->imprimirBoletaPago();
        }

        function imprimirBoletaPago()
        {
            print
            ("
                <table class='table'>
                    <tr>
                        <td>Id empleado: </td>
                        <td>".self::$idEmpleado."</td>
                    </tr>
                    <tr>
                        <td>Nombre empleado: </td>
                        <td>$this->nombre $this->apellido</td>
                    </tr>
                    <tr>
                        <td>Salario nominal: </td>
                        <td>".number_format($this->sueldoNominal, 2, '.', ',')."</td>
                    </tr>
                    <tr>
                        <td>Salario por horas extras: </td>
                        <td>".number_format($this->pagoxhoraextra, 2, '.', ',')."</td>
                    </tr>
                    <tr class='success'>
                        <td colspan='2'><h4>Descuentos</h4></td>
                    </tr>
                    <tr>
                        <td>Descuento seguro social: </td>
                        <td>".number_format($this->isss, 2, '.', ',')."</td>
                    </tr>
                    <tr>
                        <td>Descuento AFP: </td>
                        <td>".number_format($this->afp, 2, '.', ',')."</td>
                    </tr>
                    <tr>
                        <td>Descuento renta: </td>
                        <td>".number_format($this->renta, 2, '.', ',')."</td>
                    </tr>
                    <tr>
                        <td>Total descuento: </td>
                        <td>".number_format($this->isss + $this->afp + $this->renta, 2, '.', ',')."</td>
                    </tr> 
            ");

            if($this->descuentos > 0)
            {
                print("
                    <tr>
                    <td>Orden de descuento </td>
                    <td>".number_format($this->descuentos, 2, '.', ',')."</td>
                    </tr>
                ");
            };
             
             
            print
            ("

                <tr>
                    <td>Sueldo liquido a pagar: </td>
                    <td>".number_format($this->sueldoLiquido, 2, '.', '.')."</td>
                </tr>
            </table>
            ");
        }
    }

?>